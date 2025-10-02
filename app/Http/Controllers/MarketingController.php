<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;



class MarketingController extends Controller
{
    public function email_index()
    {
        if(Auth::check()) {
            $all_emails = DB::table('emails')
                ->join('users', 'users.id', '=', 'emails.user_id')
                ->orderBy('emails.created_at','desc')
                ->select('emails.*', 'users.full_name', 'users.email')
                ->get();
            return view('marketing.email-index', ['emails'=>$all_emails]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_email()
    {
        if(Auth::check()) {
            $all_users = DB::table('users')
                ->where('status', '=', 1)
                ->get();
            return view('marketing.create-email',['users'=>$all_users]);
        }
        else {
            return redirect('/login');
        }
    }



    public function send_email(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'user_id' => 'required',
                'email_subject' => 'required',
                'email_body' => 'required',
            ]);


            foreach ($request->user_id as $key => $user_id) {
                $user_info = DB::table('users')
                    ->where('id', '=', $user_id)
                    ->first();

                $mail_sent = $this->sending_mail($request, $user_info->email);

                if ($mail_sent=='ok') {
                    $result = DB::table('emails')->insert([
                        'user_id'=>$user_id,
                        'email'=>$user_info->email,
                        'subject'=>$request->email_subject,
                        'body'=>$request->email_body
                    ]);
                } else {
                    Session::flash('message', 'Email insertion failed!'); 
                    Session::flash('alert-class', 'alert-danger');
                    break;
                }
            }
            
            Session::flash('message', 'Email sent succesfully!'); 
            Session::flash('alert-class', 'alert-success');
            
            return redirect('/email');
        }
        else {
            return redirect('/login');
        }
    }


    public function sending_mail(Request $request, $receiver_email)
    {
        if(Auth::check()) {
            $subject = $request->email_subject;
            $message = $request->email_body;
            Mail::to($receiver_email)->send(new Email($message, $subject));
            return "ok";
        }
        else {
            return redirect('/login');
        }
    }


}

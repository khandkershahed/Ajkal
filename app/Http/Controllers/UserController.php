<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $all_users = DB::table('users')
                //->where('news.status', '=', 1)
                ->get();
            return view('user.index', ['all_users'=>$all_users]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_user()
    {
        if(Auth::check()) {
            return view('user.create-user');
        }
        else {
            return redirect('/login');
        }
    }



    public function store(Request $request)
    {
        if(Auth::check()) {
            $result = DB::table('users')->insert([
                'full_name'=>$request->full_name,
                'company_name'=>$request->company_name,
                'email'=>$request->email,
                'username'=>$request->username,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'address'=>$request->address,
                'password'=>Hash::make('12345678')
            ]);
            if ($result) {
                Session::flash('message', 'User inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'User insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-users');
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_user(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $editable_user = DB::table('users')
                    ->where('id', '=', $request->id)
                    ->first();

                return view('user.edit-user',['user'=>$editable_user]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_user(Request $request)
    {
        if(Auth::check()) {
            if ($request->password) {
                $new_password = Hash::make($request->password);
            } else {
                $new_password = Hash::make('12345678');
            }

            $update_user = DB::table('users')
                ->where('id', $request->editable_user_id)
                ->update([
                    'full_name'=>$request->full_name,
                    'company_name'=>$request->company_name,
                    'email'=>$request->email,
                    'username'=>$request->username,
                    'phone'=>$request->phone,
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'status'=>$request->status,
                    'password'=>$new_password
                ]);

            if ($update_user) {
                Session::flash('message', 'User updated succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'User update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-users');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_user(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $delete_user = DB::table('users')
                        ->where('id', '=', $request->id)
                        ->delete();
                    if ($delete_user) {
                        Session::flash('message', 'User deleted succesfully!'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'User delete failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this user!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-users');
        }
        else {
            return redirect('/login');
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class AdvertisementController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $all_advertisements = DB::table('advertisements')
                ->join('users', 'users.id', '=', 'advertisements.user_id')
                ->join('advertisement_categories', 'advertisement_categories.id', '=', 'advertisements.ad_category_id')
                ->orderBy('advertisements.created_at','desc')
                ->select('advertisements.*', 'users.full_name', 'advertisement_categories.name','advertisement_categories.type')
                ->get();
            return view('advertisement.index', ['advertisements'=>$all_advertisements]);
        }
        else {
            return redirect('/login');
        }
    }


    public function get_payment_history(Request $request)
    {
        if(Auth::check()) {
            $all_payment_history = DB::table('payment_history')
                ->join('payment_methods', 'payment_methods.id', '=', 'payment_history.payment_method_id')
                ->orderBy('payment_history.payment_time','asc')
                ->where('payment_history.advertisement_id', '=', $request->id)
                ->select('payment_history.*', 'payment_methods.name')
                ->get();
            return view('advertisement.payment-history', ['payment_histories'=>$all_payment_history, 'advertisement_id'=>$request->id]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_advertisement()
    {
        if(Auth::check()) {
            $all_users = DB::table('users')
                ->where('status', '=', 1)
                ->get();

            $advertisement_categories = DB::table('advertisement_categories')
                ->where('status', '=', 1)
                ->get();

            $payment_methods = DB::table('payment_methods')
                ->where('status', '=', 1)
                ->get();
            return view('advertisement.create-advertisement',['users'=>$all_users,'categories'=>$advertisement_categories,'payment_methods'=>$payment_methods]);
        }
        else {
            return redirect('/login');
        }
    }



    public function store_advertisement(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'ad_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'start_date' => 'required',
            ]);

            $destination =  "/home/admin/public_html/img/ad";
            $adImageName = time().rand(100000, 9999999).'.'.$request->ad_banner->extension();
            $request->ad_banner->move($destination, $adImageName);
            
            $result = DB::table('advertisements')->insert([
                'user_id'=>$request->user_id,
                'ad_category_id'=>$request->ad_category,
                'payable_amount'=>$request->total_payment,
                'paid_amount'=>$request->pay_amount,
                'discount'=>$request->discount,
                'due_amount'=>$request->total_payment-($request->pay_amount+$request->discount),
                'payment_method_id'=>$request->payment_method_id,
                'ad_banner'=>$adImageName,
                'ad_link'=>$request->ad_url,
                'duration'=>$request->duration,
                'start_date'=>$request->start_date
            ]);

            $insertId = DB::getPdo()->lastInsertId();
            if ($result) {
                $insert_payment_history = DB::table('payment_history')->insert([
                    'advertisement_id'=>$insertId,
                    'payment_method_id'=>$request->payment_method_id,
                    'total_payment'=>$request->total_payment,
                    'discount'=>$request->discount,
                    'total_paid_amount'=>$request->pay_amount,
                    'due_amount'=>$request->total_payment-($request->pay_amount+$request->discount),
                    'pay_amount'=>$request->pay_amount,
                    'is_due_payment'=>0
                ]);

                if ($insert_payment_history) {
                    Session::flash('message', 'Advertisement inserted succesfully!'); 
                    Session::flash('alert-class', 'alert-success');
                } else {
                    Session::flash('message', 'Advertisement payment history not updated!'); 
                    Session::flash('alert-class', 'alert-danger');
                }
                
            } else {
                Session::flash('message', 'Advertisement insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-advertisements');
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_advertisement(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $editable_advertisement = DB::table('advertisements')
                    ->join('advertisement_categories', 'advertisement_categories.id', '=', 'advertisements.ad_category_id')
                    ->where('advertisements.id', '=', $request->id)
                    ->select('advertisements.*','advertisement_categories.price')
                    ->first();

                $all_users = DB::table('users')
                    ->where('status', '=', 1)
                    ->get();

                $all_ad_categories = DB::table('advertisement_categories')
                    ->where('status', '=', 1)
                    ->get();

                $payment_methods = DB::table('payment_methods')
                    ->where('status', '=', 1)
                    ->get();

                return view('advertisement.edit-advertisement',['users'=>$all_users, 'ad_categories'=>$all_ad_categories, 'advertisement'=>$editable_advertisement, 'payment_methods'=>$payment_methods]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_advertisement(Request $request)
    {
        if(Auth::check()) {
            if ($request->ad_banner == null) {
                $bannerImageName = $request->existing_banner;
            } else {
                $request->validate(['ad_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048']);
                $destination =  "/home/admin/public_html/img/ad";
                $bannerImageName = time().rand(100000, 9999999).'.'.$request->ad_banner->extension();
                $request->ad_banner->move($destination, $bannerImageName);
            }

            $updated_advertisement = DB::table('advertisements')
                ->where('id', $request->editable_advertisement_id)
                ->update([
                    'user_id'=>$request->user_id,
                    'ad_category_id'=>$request->ad_category,
                    'payable_amount'=>$request->total_payment,
                    'paid_amount'=>$request->pay_amount,
                    'discount'=>$request->discount,
                    'due_amount'=>$request->total_payment-($request->pay_amount+$request->discount),
                    'payment_method_id'=>$request->payment_method_id,
                    'ad_banner'=>$bannerImageName,
                    'ad_link'=>$request->ad_url,
                    'duration'=>$request->duration,
                    'start_date'=>$request->start_date,
                    'status'=>$request->status
                ]);

            if ($updated_advertisement) {
                $updated_payment_history = DB::table('payment_history')
                ->where('advertisement_id', $request->editable_advertisement_id)
                ->where('is_due_payment', 0)
                ->update([
                    'payment_method_id'=>$request->user_id,
                    'total_payment'=>$request->total_payment,
                    'total_paid_amount'=>$request->pay_amount,
                    'discount'=>$request->discount,
                    'due_amount'=>$request->total_payment-($request->pay_amount+$request->discount),
                    'pay_amount'=>$request->pay_amount
                ]);

                if ($updated_payment_history) {
                    Session::flash('message', 'Advertisement updated succesfully!'); 
                    Session::flash('alert-class', 'alert-success');
                } else {
                    Session::flash('message', 'Advertisement update failed on payment history!'); 
                    Session::flash('alert-class', 'alert-danger');
                }
                
            } else {
                Session::flash('message', 'Advertisement update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-advertisements');
        }
        else {
            return redirect('/login');
        }
    }


    public function due_payment(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $due_advertisement = DB::table('advertisements')
                    ->where('advertisements.id', '=', $request->id)
                    ->first();

                $payment_methods = DB::table('payment_methods')
                    ->where('status', '=', 1)
                    ->get();

                return view('advertisement.due-payment',['advertisement'=>$due_advertisement, 'payment_methods'=>$payment_methods]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_due_payment(Request $request)
    {
        if(Auth::check()) {
            $update_ad_payment = DB::table('advertisements')
                ->where('id', $request->due_advertisement_id)
                ->update([
                    'paid_amount'=>$request->paid_amount+$request->pay_amount,
                    'due_amount'=>$request->due_amount-$request->pay_amount
                ]);

            if ($update_ad_payment) {
                $insert_payment = DB::table('payment_history')->insert([
                    'advertisement_id'=>$request->due_advertisement_id,
                    'payment_method_id'=>$request->payment_method_id,
                    'total_payment'=>$request->total_payment,
                    'discount'=>$request->discount,
                    'total_paid_amount'=>$request->paid_amount+$request->pay_amount,
                    'due_amount'=>$request->due_amount-$request->pay_amount,
                    'pay_amount'=>$request->pay_amount,
                    'is_due_payment'=>1
                ]);

                if ($insert_payment) {
                    Session::flash('message', 'Due paid succesfully!'); 
                    Session::flash('alert-class', 'alert-success');
                } else {
                    Session::flash('message', 'Due update failed on payment history!'); 
                    Session::flash('alert-class', 'alert-danger');
                }
            } else {
                Session::flash('message', 'Due update failed on advertisement!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-advertisements');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_advertisement(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $deleted_advertisement = DB::table('advertisements')
                        ->where('id', '=', $request->id)
                        ->delete();

                    if ($deleted_advertisement) {
                        Session::flash('message', 'Advertisement deleted succesfully!'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'Advertisement delete failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this advertisement!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-advertisements');
        }
        else {
            return redirect('/login');
        }
    }



    /*----------Advertisement Category or Advertisement Position & Pricing------------*/

    public function all_ad_categories()
    {
        if(Auth::check()) {
            $all_ad_categories = DB::table('advertisement_categories')
                ->orderBy('created_at','desc')
                ->get();
            return view('advertisement.advertisement-categories', ['ad_categories'=>$all_ad_categories]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_ad_category()
    {
        if(Auth::check()) {
            return view('advertisement.create-ad-category');
        }
        else {
            return redirect('/login');
        }
    }


    public function store_ad_category(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'ad_position_name' => 'required',
                'newspaper_type' => 'required',
                'ad_price' => 'required',
            ]);
            
            $result = DB::table('advertisement_categories')->insert([
                'name'=>$request->ad_position_name,
                'type'=>$request->newspaper_type,
                'price'=>$request->ad_price
            ]);
            if ($result) {
                Session::flash('message', 'Advertisement category inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Advertisement category insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/advertisement-categories');
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_ad_category(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $editable_ad_category = DB::table('advertisement_categories')
                    ->where('id', '=', $request->id)
                    ->first();

                return view('advertisement.edit-ad-category',['advertisement_category'=>$editable_ad_category]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_ad_category(Request $request)
    {
        if(Auth::check()) {            
            $update_ad_category = DB::table('advertisement_categories')
                ->where('id', $request->editable_ad_category_id)
                ->update([
                    'name'=>$request->ad_position_name,
                    'type'=>$request->newspaper_type,
                    'price'=>$request->ad_price,
                    'status'=>$request->status
                ]);

            if ($update_ad_category) {
                Session::flash('message', 'Advertisement category updated succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Advertisement category update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/advertisement-categories');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_ad_category(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $deleted_ad_category = DB::table('advertisement_categories')
                        ->where('id', '=', $request->id)
                        ->delete();

                    if ($deleted_ad_category) {
                        Session::flash('message', 'Advertisement category deleted succesfully!'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'Advertisement category delete failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this advertisement position!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/advertisement-categories');
        }
        else {
            return redirect('/login');
        }
    }


    /*---------------------------Invoice-----------------------------*/


    public function get_invoice(Request $request)
    {
        if(Auth::check()) {
            //if($request->id) {
                $advertisement = DB::table('advertisements')
                    ->join('users', 'users.id', '=', 'advertisements.user_id')
                    ->join('advertisement_categories', 'advertisement_categories.id', '=', 'advertisements.ad_category_id')
                    ->where('advertisements.id', '=', $request->id)
                    ->orderBy('advertisements.created_at','desc')
                    ->select('advertisements.*', 'users.full_name', 'users.email',  'users.address', 'advertisement_categories.name','advertisement_categories.type')
                    ->first();
                
                return view('advertisement.invoice',['invoice'=>$advertisement]);
            //}
        }
        else {
            return redirect('/login');
        }
    }



    /*-------------------------Report--------------------------------*/


    public function get_report(Request $request)
    {
        if(Auth::check()) {
            $all_users = DB::table('users')
                ->where('status', '=', 1)
                ->get();

            $advertisement_categories = DB::table('advertisement_categories')
                ->where('status', '=', 1)
                ->get();
            return view('advertisement.report',['users'=>$all_users,'categories'=>$advertisement_categories]);
        }
        else {
            return redirect('/login');
        }
    }


    public function get_advertisement_report()
    {
        if(Auth::check()) {
            $all_advertisements = DB::table('advertisements')
                ->join('users', 'users.id', '=', 'advertisements.user_id')
                ->select('users.full_name', 
                        DB::Raw('SUM(advertisements.payable_amount) as payable_amount'), 
                        DB::Raw('SUM(advertisements.paid_amount) as paid_amount'), 
                        DB::Raw('SUM(advertisements.discount) as discount'), 
                        DB::Raw('SUM(advertisements.due_amount) as due_amount')
                    )
                ->groupBy('advertisements.user_id')
                ->get();

            return view('advertisement.advertisement-report', ['advertisements'=>$all_advertisements]);
        }
        else {
            return redirect('/login');
        }
    }


    /*------------------------Ajax Requests--------------------------*/

    public function get_advertisement_pricing(Request $request)
    {
        if(Auth::check()) {
            if ($request->ad_category_id) {
                $ad_category_detail = DB::table('advertisement_categories')
                    ->where('id', '=', $request->ad_category_id)
                    ->first();
            }
            return json_encode($ad_category_detail);
        }
        else {
            return redirect('/login');
        }
    }


    public function generate_report(Request $request)
    {
        if(Auth::check()) {
            if ($request->user_id==0) {
                $report_data = DB::table('advertisements')
                    ->join('users', 'users.id', '=', 'advertisements.user_id')
                    ->join('advertisement_categories', 'advertisement_categories.id', '=', 'advertisements.ad_category_id')
                    ->whereBetween('advertisements.start_date', [$request->report_start, $request->report_end])
                    ->orderBy('advertisements.created_at','desc')
                    ->select('advertisements.*', 'users.full_name', 'users.company_name', 'advertisement_categories.name')
                    ->get();
            } else {
                $report_data = DB::table('advertisements')
                    ->join('users', 'users.id', '=', 'advertisements.user_id')
                    ->join('advertisement_categories', 'advertisement_categories.id', '=', 'advertisements.ad_category_id')
                    ->whereBetween('advertisements.start_date', [$request->report_start, $request->report_end])
                    ->where('advertisements.user_id', '=', $request->user_id)
                    ->orderBy('advertisements.created_at','desc')
                    ->select('advertisements.*', 'users.full_name', 'users.company_name', 'advertisement_categories.name')
                    ->get();
            }
            return json_encode($report_data);
        }
        else {
            return redirect('/login');
        }
    }

}

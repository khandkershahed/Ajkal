<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class EpaperController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $all_epapers = DB::table('epapers')
                ->where('page_number', '=', 1)
                ->orderBy('epaper_date','desc')
                ->get();
            return view('epaper.index', ['epapers'=>$all_epapers]);
        }
        else {
            return redirect('/login');
        }
    }


    public function date_wise_epapers(Request $request)
    {
        if(Auth::check()) {
            $all_epapers = DB::table('epapers')
                ->where('epaper_date', '=', $request->date)
                ->orderBy('page_number','asc')
                ->get();
            return view('epaper.date-epapers', ['epapers'=>$all_epapers]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_epaper()
    {
        if(Auth::check()) {
            return view('epaper.create');
        }
        else {
            return redirect('/login');
        }
    }


    public function create_date_epaper(Request $request)
    {
        if(Auth::check()) {
            return view('epaper.create-date-epaper', ['epaper_date'=>$request->date]);
        }
        else {
            return redirect('/login');
        }
    }



    public function store(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'first_page' => 'required|image|mimes:jpeg,png,jpg',
            ]);

            $destination =  "/home/admin/public_html/img/epaper";
            $firstImageName = time().rand(100000, 9999999).'.'.$request->first_page->extension();
            $request->first_page->move($destination, $firstImageName);

            $page_number = isset($request->page_number)?$request->page_number:1;
            
            $result = DB::table('epapers')->insert([
                'name'=>$request->title,
                'epaper_date'=>$request->epaper_date,
                'epaper_image'=>$firstImageName,
                'page_number'=>$page_number,
                'status'=>$request->status
            ]);

            if ($result) {
                Session::flash('message', 'Epaper inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Epaper insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-epapers');
        }
        else {
            return redirect('/login');
        }
    }


    public function view(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $epaper = DB::table('epapers')
                    ->where('id', '=', $request->id)
                    ->first();

                $epaper_detail_info = DB::table('epaper_details')
                    ->where('epaper_id', '=', $request->id)
                    ->get();

                return view('epaper.view',['epaper'=>$epaper, 'epaper_details'=>$epaper_detail_info, 'host'=>$_SERVER['HTTP_HOST']]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function crop(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $epaper = DB::table('epapers')
                    ->where('id', '=', $request->id)
                    ->first();

                return view('epaper.crop',['epaper'=>$epaper]);
            }
        }
        else {
            return redirect('/login');
        }
    }   


    public function view_crop_image(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $crop_epaper = DB::table('epaper_details')
                    ->where('id', '=', $request->id)
                    ->first();

                return view('epaper.view-crop-epaper',['crop_epaper'=>$crop_epaper]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function store_cropped_epaper(Request $request)
    {
        if(Auth::check()) {
            
            $result = DB::table('epaper_details')->insert([
                'epaper_id'=>$request->epaper_id,
                'top_x'=>$request->topX,
                'top_y'=>$request->topY,
                'bottom_x'=>$request->bottomX,
                'bottom_y'=>$request->bottomY,
                'crop_data'=>$request->crop_data
            ]);
            if ($result) {
                $response = ['status'=>1,'message'=>'data saved'];
            } else {
                $response = ['status'=>0,'message'=>'failed'];
            }
            return json_encode($response);
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_epaper_page(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $editable_epaper = DB::table('epapers')
                    ->where('id', '=', $request->id)
                    ->first();

                return view('epaper.edit-epaper-page',['epaper'=>$editable_epaper]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_epaper_page(Request $request)
    {
        if(Auth::check()) {            
            if ($request->epaper_page == null) {
                $epaperImageName = $request->existing_epaper_image;
            } else {
                $request->validate(['epaper_page' => 'required|image|mimes:jpeg,png,jpg']);
                $destination =  "/home/admin/public_html/img/epaper";
                $epaperImageName = time().rand(100000, 9999999).'.'.$request->epaper_page->extension();
                $request->epaper_page->move($destination, $epaperImageName);
            }

            $update_epaper = DB::table('epapers')
                ->where('id', $request->epaper_id)
                ->update([
                    'name'=>$request->title,
                    'epaper_image'=>$epaperImageName,
                    'status'=>$request->status
                ]);

            if ($update_epaper) {
                Session::flash('message', 'ePaper page updated succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'ePaper page update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/date-epapers/'.$request->epaper_date);
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_epaper(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->date) {
                    $delete_epaper = DB::table('epapers')
                        ->where('epaper_date', '=', $request->date)
                        ->delete();

                    if ($delete_epaper) {
                        Session::flash('message', 'All ePaper pages deleted succesfully for '.$request->date); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'ePaper delete failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this epaper!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-epapers');
        }
        else {
            return redirect('/login');
        }
    }

}

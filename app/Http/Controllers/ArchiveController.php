<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class ArchiveController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $all_editions = DB::table('archive_editions')
                ->orderBy('edition_date','desc')
                ->get();
            return view('archive.index', ['archive_editions'=>$all_editions]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_archive()
    {
        if(Auth::check()) {
            return view('archive.create');
        }
        else {
            return redirect('/login');
        }
    }



    public function store(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'archive_file' => 'required',
            ]);

            $destination =  "/home/ajkalu/public_html/archive/files";
            $archiveFileName = time().rand(100000, 9999999).'.'.$request->archive_file->extension();
            $request->archive_file->move($destination, $archiveFileName);
            
            $result = DB::table('archive_editions')->insert([
                'edition_name'=>$request->edition_name,
                'edition_date'=>$request->edition_date,
                'archive_file'=>$archiveFileName,
                'status'=>$request->status
            ]);

            if ($result) {
                Session::flash('message', 'Archive inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Archive insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-archives');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_archive_edition(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $delete_edition = DB::table('archive_editions')
                        ->where('id', '=', $request->id)
                        ->delete();

                    if ($delete_edition) {
                        Session::flash('message', 'Archive edition deleted succesfully'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'Archive edition delete failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this archive edition!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-archives');
        }
        else {
            return redirect('/login');
        }
    }

}

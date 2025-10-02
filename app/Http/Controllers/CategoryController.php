<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $categories = DB::table('categories')
                ->where('status', '=', 1)
                ->orderBy('serial','asc')
                ->get();
            return view('category.index', ['categories'=>$categories]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_category()
    {
        if(Auth::check()) {
            return view('category.create-category');
        }
        else {
            return redirect('/login');
        }
    }


    public function store(Request $request)
    {
        if(Auth::check()) {
            $result = DB::table('categories')->insert([
                'name'=>$request->name,
                'name_bangla'=>$request->name_bangla,
                'code'=>$request->code,
                'serial'=>$request->serial,
                'status'=>$request->status
            ]);
            if ($result) {
                Session::flash('message', 'Category inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Category insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-categories');
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_category(Request $request)
    {
        if(Auth::check()) {
            if ($request->id) {
                $editable_category = DB::table('categories')
                    ->where('id', '=', $request->id)
                    ->first();
            }
            return view('category.edit-category',['category'=>$editable_category]);
        }
        else {
            return redirect('/login');
        }
    }


    public function update_category(Request $request)
    {
        if(Auth::check()) {
            $update_category = DB::table('categories')
                ->where('id', $request->editable_category_id)
                ->update([
                    'name'=>$request->name,
                    'name_bangla'=>$request->name_bangla,
                    'code'=>$request->code,
                    'serial'=>$request->serial,
                    'status'=>$request->status
                ]);

            if ($update_category) {
                Session::flash('message', 'Category updated succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Category update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }

            return redirect('/all-categories');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_category(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $delete_category = DB::table('categories')
                        ->where('id', '=', $request->id)
                        ->delete();

                    if ($delete_category) {
                        Session::flash('message', 'Category deleted succesfully!'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'Category deletion failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this category!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            
            return redirect('/all-categories');
        }
        else {
            return redirect('/login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use DataTables;
//use Illuminate\Support\Facades\Route;



class NewsController extends Controller
{
    public function get_server_side_news()
    {
        $categories = DB::table('categories')
            ->where('status', '=', 1)
            ->orderBy('serial','asc')
            ->get();

        return view('news.server-side-index', ['categories'=>$categories]);
    }


    public function get_news_pagination(Request $request)
    {
        if ($request->ajax()) {
            $admin_role = Auth::user()->admin_role;

            $query = DB::table('news')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->orderBy('news_time','desc');

            if ($request->category_filter)
                $query->where('category_id', $request->category_filter);
            if ($request->type_filter)
                $query->where('news_type', $request->type_filter);
            if ($request->featured_filter)
                $query->where('is_featured', $request->featured_filter);
            if ($request->status_filter)
                $query->where('news.status', $request->status_filter);
            

            $query->select('news.*', 'categories.name_bangla as name')->limit(5000);
            $data = $query->get();

            if ($admin_role==1) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('type', function($row){
                    if ($row->news_type==1) {
                        $newsType = 'Breaking';
                    } elseif ($row->news_type==2) {
                        $newsType = 'Spotlight';
                    } else {
                        $newsType = 'General';
                    }
                    return $newsType;
                })
                ->addColumn('featured', function($row){
                    $featuredNews = $row->is_featured==1?'Yes':'No';
                    return $featuredNews;
                })
                ->addColumn('status', function($row){
                    $newsStatus = $row->status==1?'Published':'Pending';
                    return $newsStatus;
                })
                ->addColumn('action', function($row){
                          
                        $actionBtn = '<a href="edit-news/'.$row->id.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                      </svg>
                                    </span></a>
                                    <button type="button" id="'.$row->id.'" class="news_delete_btn btn btn-icon btn-bg-light btn-active-color-primary btn-sm"><span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                      </svg>
                                    </span></button>';
                    return $actionBtn;
                })
                ->rawColumns(['type','featured','status','action'])
                ->make(true);
            }
            if ($admin_role==2 || $admin_role==3) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('type', function($row){
                    if ($row->news_type==1) {
                        $newsType = 'Breaking';
                    } elseif ($row->news_type==2) {
                        $newsType = 'Spotlight';
                    } else {
                        $newsType = 'General';
                    }
                    return $newsType;
                })
                ->addColumn('featured', function($row){
                    $featuredNews = $row->is_featured==1?'Yes':'No';
                    return $featuredNews;
                })
                ->addColumn('status', function($row){
                    $newsStatus = $row->status==1?'Published':'Pending';
                    return $newsStatus;
                })
                ->addColumn('action', function($row){
                          
                        $actionBtn = '<a href="edit-news/'.$row->id.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                      </svg>
                                    </span></a>';
                    return $actionBtn;
                })
                ->rawColumns(['type','featured','status','action'])
                ->make(true);
            }
        }
    }


    public function index()
    {
        if(Auth::check()) {
            $all_news = DB::table('news')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->where('news.status', '=', 1)
                ->orderBy('news_time','desc')
                ->select('news.*', 'categories.name_bangla as name')
                ->limit(50)
                ->get();
            return view('news.index', ['all_news'=>$all_news]);
        }
        else {
            return redirect('/login');
        }
    }


    public function create_news()
    {
        if(Auth::check()) {
            $categories = DB::table('categories')
                ->where('status', '=', 1)
                ->orderBy('serial','asc')
                ->get();
            return view('news.create-news',['categories'=>$categories]);
        }
        else {
            return redirect('/login');
        }
    }



    public function store(Request $request)
    {
        if(Auth::check()) {
            $request->validate([
                'news_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'thumbnail_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($request->is_featured == 1) {
                $existing_feature_news = DB::table('news')
                    ->where('category_id', '=', $request->category_id)
                    ->where('is_featured', '=', 1)
                    ->count();

                if($existing_feature_news > 0) {
                    Session::flash('message', 'featured news already exist for this category!'); 
                    Session::flash('alert-class', 'alert-danger');
                    return redirect('/all-news');
                }
            }
        
            $destination =  "/home/admin/public_html/img/news";
            $newsImageName = time().rand(100000, 9999999).'.'.$request->news_image->extension();
            $request->news_image->move($destination, $newsImageName);

            if ($request->thumbnail_image) {
                $thumbnailImageName = time().rand(100000, 9999999).'.'.$request->thumbnail_image->extension();
                $request->thumbnail_image->move($destination, $thumbnailImageName);
            } else {
                $thumbnailImageName = null;
            }
            
            $result = DB::table('news')->insert([
                'news_title'=>$request->news_title,
                'news_short_brief'=>$request->short_brief,
                'thumbnail_img'=>$thumbnailImageName,
                'title_img'=>$newsImageName,
                'category_id'=>$request->category_id,
                'news_type'=>$request->news_type,
                'is_featured'=>$request->is_featured,
                'video_url'=>$request->video_url,
                'status'=>$request->status,
                'news_detail'=>$request->news_detail,
                'image_caption'=>$request->image_caption,
                'news_author'=>$request->news_author,
                'meta_tags'=>$request->meta_tags,
                'posted_by'=>1
            ]);
            if ($result) {
                Session::flash('message', 'News inserted succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'News insertion failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-news');
        }
        else {
            return redirect('/login');
        }
    }


    public function edit_news(Request $request)
    {
        if(Auth::check()) {
            if($request->id) {
                $editable_news = DB::table('news')
                    ->where('id', '=', $request->id)
                    ->first();

                $categories = DB::table('categories')
                    ->where('status', '=', 1)
                    ->orderBy('serial','asc')
                    ->get();

                return view('news.edit-news',['categories'=>$categories, 'news'=>$editable_news]);
            }
        }
        else {
            return redirect('/login');
        }
    }


    public function update_news(Request $request)
    {
        if(Auth::check()) {
            $destination =  "/home/admin/public_html/img/news";        
            if ($request->news_image == null) {
                $newsImageName = $request->existing_news_image;
            } else {
                $request->validate(['news_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048']);
                $newsImageName = time().rand(100000, 9999999).'.'.$request->news_image->extension();
                $request->news_image->move($destination, $newsImageName);
            }

            if ($request->thumbnail_image == null) {
                $thumbnailImageName = $request->existing_thumbnail_image;
            } else {
                $request->validate(['thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048']);
                $thumbnailImageName = time().rand(100000, 9999999).'.'.$request->thumbnail_image->extension();
                $request->thumbnail_image->move($destination, $thumbnailImageName);
            }

            $update_news = DB::table('news')
                ->where('id', $request->editable_news_id)
                ->update([
                    'news_title'=>$request->news_title,
                    'news_short_brief'=>$request->short_brief,
                    'thumbnail_img'=>$thumbnailImageName,
                    'title_img'=>$newsImageName,
                    'category_id'=>$request->category_id,
                    'news_type'=>$request->news_type,
                    'is_featured'=>$request->is_featured,
                    'video_url'=>$request->video_url,
                    'status'=>$request->status,
                    'news_detail'=>$request->news_detail,
                    'image_caption'=>$request->image_caption,
                    'news_author'=>$request->news_author,
                    'meta_tags'=>$request->meta_tags
                ]);

            if ($update_news) {
                Session::flash('message', 'News updated succesfully!'); 
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'News update failed!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-news');
        }
        else {
            return redirect('/login');
        }
    }


    public function delete_news(Request $request)
    {
        if(Auth::check()) {
            $admin_role = Auth::user()->admin_role;
            if ($admin_role==1) {
                if ($request->id) {
                    $delete_news = DB::table('news')
                        ->where('id', '=', $request->id)
                        ->delete();

                    if ($delete_news) {
                        Session::flash('message', 'News deleted succesfully!'); 
                        Session::flash('alert-class', 'alert-success');
                    } else {
                        Session::flash('message', 'News deletion failed!'); 
                        Session::flash('alert-class', 'alert-danger');
                    }
                }
            } else {
                Session::flash('message', 'You are not authorized for delete this news!'); 
                Session::flash('alert-class', 'alert-danger');
            }
            return redirect('/all-news');
        }
        else {
            return redirect('/login');
        }
    }

}

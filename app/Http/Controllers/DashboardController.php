<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show()
    {
        if(Auth::check()) {
            return view('dashboard.dashboard');
        }
        else {
            return redirect('/login');
        }
    }
}

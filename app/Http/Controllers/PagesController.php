<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function daging()
    {
        return view('daging');
    }

    public function adminLogin()
    {
        return view('auth/login');
    }

    public function adminPage()
    {
        return view('dashboard');
    }
}

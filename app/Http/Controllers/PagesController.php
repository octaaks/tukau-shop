<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

    public function loginPage()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function manageUser()
    {
        return view('manageUser');
    }

    public function manageProduct()
    {
        return view('products.manageProduct');
    }

    public function shop()
    {
        $items = Product::all();
        return view('shope', ['items'=> $items]);
    }
 }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PagesController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        // return view('index', ['categories'=> $categories]);

        $products = Product::orderBy('created_at', 'DESC')->get();
        // return view('index', ['products'=> $products]);

        return view('index', compact('categories', 'products'));
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

    public function shop($slug)
    {
        if ($slug=='all') {
            $items = Product::all();
        } else {
            $items = Product::where();
        }
        return view('shop'.'/'.$slug, ['items'=> $items]);
    }
}

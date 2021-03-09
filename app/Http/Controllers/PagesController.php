<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
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
            $category = 'Semua Barang';
            $items = Product::all();
            return view('shop', ['category'=>$category,'items'=>$items]);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $items = Product::whereHas('categories', function (Builder $query) use ($slug) {
                $query->where('slug', '=', $slug);
            })->get();
            // dd($items);
            return view('shop', ['category'=>$category->name,'items'=>$items]);
        }
    }
    
    public function search(Request $request)
    {
        $cari = $request->search;
    
        $products = Product::where('name', 'like', "%".$cari."%")
        ->paginate();
    
        // mengirim data pegawai ke view
        return view('shop', ['items' => $products, 'category' => $cari]);
    }
}

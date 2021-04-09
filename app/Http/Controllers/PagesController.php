<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
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
        $orders = Order::all();
        return view('dashboard', compact('orders'));
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
            $categories = Category::all();
            return view('shop', ['categories'=>$categories,'category'=>$category,'items'=>$items]);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $items = Product::whereHas('categories', function (Builder $query) use ($slug) {
                $query->where('slug', '=', $slug);
            })->get();
            // dd($items);
            $categories = Category::all();
            return view('shop', ['categories'=>$categories, 'category'=>$category->name,'items'=>$items]);
        }
    }
    
    public function search(Request $request)
    {
        $cari = $request->search;
    
        $categories = Category::all();
        $products = Product::where('name', 'like', "%".$cari."%")
        ->paginate();
    
        // mengirim data pegawai ke view
        return view('shop', ['categories'=>$categories,'items' => $products, 'category' => 'Hasil pencarian untuk "'.$cari.'"']);
    }
}
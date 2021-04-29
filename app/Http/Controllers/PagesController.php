<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $orders = Order::where('status', '=', 'pending')->get();
        $pending = Order::where('status', '=', 'pending')->get();
        return view('dashboard', compact('orders', 'pending'));
    }
    
    public function pending()
    {
        $pending = Order::where('status', '=', 'pending')->get();
        $orders = Order::where('status', '=', 'pending')->get();
        
        return view('dashboard', compact('orders', 'pending'));
    }
    
    public function cancelled()
    {
        $pending = Order::where('status', '=', 'pending')->get();
        $orders = Order::where('status', '=', 'dibatalkan')->get();
        
        return view('order.cancelled', compact('orders', 'pending'));
    }
    
    public function proccessed()
    {
        $orders = Order::where('status', '=', 'diproses')->get();
        $pending = Order::where('status', '=', 'pending')->get();
        
        return view('order.proccessed', compact('orders', 'pending'));
    }

    public function manageUser()
    {
        $pending = Order::where('status', '=', 'pending')->get();
        return view('manageUser', compact('pending'));
    }

    public function manageProduct()
    {
        $pending = Order::where('status', '=', 'pending')->get();
        return view('products.manageProduct', compact('pending'));
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

    public function profile()
    {
        $categories = Category::all();
        $id = Auth::id();
        $user = User::find($id);
        return view('profile', ['user'=> $user, 'categories'=>$categories]);
    }
    
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'image' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $param = $request->all();
        
        $data = [
            'name'      => $param['name'],
            'email'     => $param['email'],
            'no_hp'     => $param['no_hp'],
            'address'   => $param['address']
        ];

        $file = $request->file('image');
        
        // Kalo pas diedit gambar diganti / masukin gambar
        if ($file) {
            // menyimpan data file yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file/profile';
            $file->move($tujuan_upload, $nama_file);
            
            $data['image'] = "/".$tujuan_upload."/".$nama_file; // Update field photo
        }

        try {
            $id = Auth::id();
            DB::table('users')->where('id', '=', $id)->update($data);
                        
            return redirect('/profile')->with('success', 'Profil telah diperbarui!');
        } catch (\Exception $e) {
            return redirect('/profile')->with('error', 'Terjadi kesalahan!');
        }
    }
}
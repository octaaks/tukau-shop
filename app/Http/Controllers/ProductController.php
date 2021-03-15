<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

use Str;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('products.manageProduct', ['products'=> $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.formProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required',
            'price'         => 'required',
            'weight'        => 'required',
            'image'         => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'description'   => 'nullable'
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        $product = new Product;
        $product -> category_id    = $request-> category_id;
        $product -> name           = $request-> name;
        $product -> price          = $request-> price;
        $product -> weight         = $request-> weight;
        $product -> image          = "/".$tujuan_upload.'/'.$nama_file;
        $product -> description    = $request-> description;
        $product->save();
        $product->categories()->attach($request-> category_id);

        return redirect('/tukau/administrator/product')->with('success', 'Data saved succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.viewProduct', ['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $product = Product::find($id);
        if (!$product) {
            return redirect('/tukau/administrator/product')->with('error', 'Product tidak ada!');
        }
        return view('products.editProduct', ['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $param = $request->all();
        
        $data = [
            'category_id'   => $param['category_id'],
            'name'          => $param['name'],
            'price'         => $param['price'],
            'weight'        => $param['weight'],
            'description'   => $param['description']
        ];

        $cp = [
            'product_id'   => $id,
            'category_id'   => $param['category_id']
        ];

        $file = $request->file('image');

        // Kalo pas diedit gambar diganti / masukin gambar
        if ($file) {
            // menyimpan data file yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            
            $data['image'] = "/".$tujuan_upload."/".$nama_file; // Update field photo
        }

        $product = Product::find($id);

        try {
            DB::table('products') -> where('id', '=', $id) -> update($data);
            DB::table('category_product') ->where('product_id', '=', $id)-> update($cp);
                        
            return redirect('/tukau/administrator/product')->with('success', 'Data saved succesfully!');
        } catch (\Exception $e) {
            return redirect('/tukau/administrator/product')->with('error', 'Product tidak ada!');
        }

        // $product = Product::find($id);

        // // dd($user);
        // if (!$product) {
        //     return redirect('/tukau/administrator/product')->with('error', 'Product tidak ada!');
        // }
       
        // $product -> category_id    = $request-> category_id;
        // $product -> name           = $request-> name;
        // $product -> price          = $request-> price;
        // $product -> weight         = $request-> weight;
        // $product -> image          = $request-> image;
        // $product -> description    = $request-> description;
        // $product->save();

        // $productCategory = DB::table('category_product')->where('product_id', $id)
        //  ->update([
        //      'category_id'=> $request->category_id,
        //  ]);

        // return redirect('/tukau/administrator/product')->with('success', 'Data saved succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $product = Product::find($id);
        
        if (!$product) {
            return redirect('/tukau/administrator/product/')->with('error', 'Produk tidak ada!!');
        }
        $product->delete($request);
        File::delete($product->image);
        return redirect('/tukau/administrator/product/')->with('success', 'Produk telah dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

use Str;
use Session;

class ProductController extends Controller
{
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
            'image'         => 'nullable',
            'description'   => 'nullable'
        ]);

        $product = new Product;
        // dd($user);

        $product -> category_id    = $request-> category_id;
        $product -> name           = $request-> name;
        $product -> price          = $request-> price;
        $product -> weight         = $request-> weight;
        $product -> image          = $request-> image;
        $product -> description    = $request-> description;
        $product->save();

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
        //
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
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required',
            'price'         => 'required',
            'weight'        => 'required',
            'image'         => 'nullable',
            'description'   => 'nullable'
        ]);

        $product = Product::find($id);

        // dd($user);
        if (!$product) {
            return redirect('/tukau/administrator/product')->with('error', 'Product tidak ada!');
        }
       
        $product -> category_id    = $request-> category_id;
        $product -> name           = $request-> name;
        $product -> price          = $request-> price;
        $product -> weight         = $request-> weight;
        $product -> image          = $request-> image;
        $product -> description    = $request-> description;
        $product->save();

        $productCategory = DB::table('category_product')->where('product_id', $id)
         ->update([
             'category_id'=> $request->category_id,
         ]);

        return redirect('/tukau/administrator/product')->with('success', 'Data saved succesfully!');
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
        return redirect('/tukau/administrator/product/')->with('success', 'Produk telah dihapus!');
    }
}

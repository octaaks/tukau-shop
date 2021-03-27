<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'shipping_fullname' => 'required',
        'shipping_city' => 'required',
        'shipping_address' => 'required',
        'shipping_phone' => 'required',
        'shipping_zipcode' => 'required',
        'payment_method' => 'required',
    ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->fullname = $request->input('shipping_fullname');
        $order->city = $request->input('shipping_city');
        $order->address = $request->input('shipping_address');
        $order->phone = $request->input('shipping_phone');
        $order->zipcode = $request->input('shipping_zipcode');

        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        if (request('payment_method') == 'e_money') {
            $order->payment_method = 'e_money';
        } else {
            $order->payment_method = 'cash_on_delivery';
        }

        $order->save();

        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
        }

        \Cart::session(auth()->id())->clear();

        return redirect()->route('home')->withMessage('Order has been placed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

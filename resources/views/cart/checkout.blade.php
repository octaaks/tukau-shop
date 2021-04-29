@extends('layouts/main')

@section('title', 'Lihat Keranjang')

@section('container')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Checkout</h3>
            </div>
            <div class="card-body">
                <form action="/order/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="shipping_fullname" id="" class="form-control"
                            value="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" name="shipping_city" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Kode Pos</label>
                        <input type="number" name="shipping_zipcode" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="shipping_address" id="" class="form-control"
                            value="{{ Auth::user()->address }}">
                    </div>

                    <div class="form-group">
                        <label for="">No. HP</label>
                        <input type="text" name="shipping_phone" id="" class="form-control"
                            value="{{ Auth::user()->no_hp }}">
                    </div>

                    <h4>Metode Pembayaran</h4>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" checked class="form-check-input" name="payment_method" id=""
                                value="cash_on_delivery">
                            Cash on delivery
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" checked class="form-check-input" name="payment_method" id=""
                                value="e_money">
                            E-Money
                        </label>
                    </div>

                    {{-- <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                        Paypal
                    </label>
                </div> --}}
                    <div class="text-right">
                        <button type="submit" class=" btn btn-primary mt-3">Place Order</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
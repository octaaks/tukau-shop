@extends('layouts/admin')

@section('title', 'Proses Pesanan')

@section('container')

<div class="content">
    <div class="container-fluid">
        <div class="card">

            <div class="card-body">
                <h5>{{$order->order_number}}</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$order->fullname}}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>:</td>
                            <td>{{$order->phone}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$order->address}}, {{$order->city}}, {{$order->zipcode}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Status pesanan</td>
                            <td>:</td>
                            <td>{{$order->status}}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp. {{$order->grand_total}}</td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>:</td>
                            <td>{{$order->payment_method}}</td>
                        </tr>
                        <tr>
                            <td>Item</td>
                            <td>:</td>
                            <td>
                                <ul>
                                    @foreach($order->items()->get() as $item)
                                    <li>{{$item->pivot->quantity}} {{$item->name}} = Rp. {{$item->price}}</li>
                                    @endforeach

                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary mt-2 " href="/tukau/administrator/index" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
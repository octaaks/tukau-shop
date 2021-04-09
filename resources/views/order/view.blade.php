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
                        <a class="btn btn-info mt-2 " href="#" role="button" data-toggle="modal"
                            data-target="#exampleModal">Proses
                            Pesanan</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin
                            memproses
                            pesanan ini?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <a class="btn btn-success" method="delete" href="/order/{{$order->id}}/proccess"
                            role="button">Proses !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts/main')

@section('title', 'Lihat Keranjang')

@section('container')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>Rp. {{$item->price}}</td>
                        <td>Rp. {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                        <td width="30%">
                            <form method="POST" action="/cart/update/{{$item->id}}">
                                @csrf
                                <div class="d-flex">
                                    <input name="quantity" type="number" class="form-control" value={{$item->quantity}}>
                                    <input class="btn btn-outline-secondary" type="submit" value="Simpan">
                                </div>
                            </form>

                        </td>
                        <td width="20%">
                            <a class="btn btn-danger btn-sm" method="delete" href="/cart/destroy/{{$item->id}}"
                                role="button">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Total : Rp. {{Cart::session(auth()->id())->getTotal()}}</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary" method="delete" href="/cart/destroy/{{$item->id}}"
                            role="button">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
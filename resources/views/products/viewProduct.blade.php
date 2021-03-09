@extends('layouts/main')

@section('title', 'Lihat Produk')

@section('container')

    <div class="content">
        <div class="row">
            <div class="col">
                {{ $product->name }}
            </div>
        </div>
    </div>
    
@endsection
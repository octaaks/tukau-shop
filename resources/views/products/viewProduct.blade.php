@extends('layouts/main')

@section('title', 'Lihat Produk')

@section('container')

<head>
    <title>ALL Product</title>
    <link rel="stylesheet" href="{{asset('css/style_view.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- single product detail -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-6">
                <img src={{ $product->image }} width="100%" id="ProductImg">
            </div>
            <div class="col-6">
                <p><a  href="/">Tukau Home</a> > <a  href="/shop/{{$product->Categories()->first()->slug}}">{{$product->Categories()->first()->name}}</a></p>
                <h1>{{ $product->name }}</h1>
                <h4>Rp. {{ $product->price }}</h4>
                <h3>{{ $product->weight }}g</h3>

                <input type="number" value="1">
                <a href="/add-to-cart/{{$product->id}}" class="btn-buy">Add to chart</a>
                <h3>Deskripsi</h3>
                <br>
                <p> {{ $product->description }}</p>
            </div>
        </div>
    </div>

    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Relate Product</h2>
            <p><a  href="/shop/{{$product->Categories()->first()->slug}}">View More</a></p>
        </div>
    </div>
    <!-- product -->

    <div class="small-container">
        <div class="row">
            @foreach($related as $key=>$r)
            @if( $loop->first or $loop->iteration <= 4 ) <div class="col-4">
                <img src={{ $r->image}}>
                <h4>{{ $r->name }}</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. {{ $r->price }}</p>

                <div class="btn btn">Add to chart</div>
        </div>
        @endif
        @endforeach
    </div>
    </div>
</body>

@endsection

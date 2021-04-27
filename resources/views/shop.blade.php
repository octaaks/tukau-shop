@extends('layouts/main')

@section('title', 'About')

@section('container')

<link rel="stylesheet" href="{{asset('css/style.css')}}">

<!-- font awesome -->
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="products">
        <div class="container">
            <div class="float-right"><a href="/">Tukau Home</a> > {{$category}}</div>
            <h2>{{$category}}</h2>
            <div class="d-flex justify-content-start flex-wrap mt-4">
                @foreach($items as $product)<div class="card product-card">
                    <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                    <div class="card-body">

                        <a href="/product/{{$product->id}}" class="product-name">
                            <h6 style="white-space: nowrap; overflow: hidden;">{{$product->name}}
                            </h6>
                        </a>
                        <p class="product-price">Rp. {{$product->price}}</p>
                        <div class="align-items-right text-right rating">
                            <p>5 <i class="fas fa-star"></i></p>
                        </div>
                        <a href='/add-to-cart/{{$product->id}}' class="btn buy-btn"><i class="fas fa-cart-plus"></i>
                            BUNGKUS</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
@endsection
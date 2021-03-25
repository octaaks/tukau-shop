@extends('layouts/main')

@section('title', 'About')

@section('container')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- <link rel="stylesheet" href="{{asset('css/style1.css')}}"> -->

<!-- font awesome -->
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="products">
        <div class="container">
            <a href="/">Tukau Home</a> > {{$category}}
            <h2>{{$category}}</h2>
            <div class="d-flex flex-wrap">
                @foreach($items as $product)

                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="product-info-top">
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>

                        <a href="/product/{{$product->id}}" class="product-name">
                            <h6 style="white-space: nowrap; overflow: hidden;" class="card-title">{{$product->name}}
                            </h6>
                        </a>
                        <p class="product-price">Rp. {{$product->price}}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <a href='add-to-cart/{{$product->id}}' class="btn btn-success buy-btn">BELI</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection
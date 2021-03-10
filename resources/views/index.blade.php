@extends('layouts/main')

@section('title', 'Home')

@section('container')

<!-- My CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <!-- Content here -->

    <!-- caraousel  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="carousel/buah.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/sayur.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/daging.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/groceries.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- end caraousel -->


    <div class="arrival-heading">
        <strong>Category</strong>
    </div>

    <div class="d-flex align-content-sm-center flex-wrap">

        <div align="center" class="category-box">
            <div class="feature-box">
                <a href="/shop/all">
                    <img src="img/category/cart.png">
                </a>
            </div>
            <span>Semua Produk</span>
        </div>

        @foreach($categories as $key=>$category)
        <div align="center" class="category-box">
            <div class="feature-box">
                <a href="/shop/{{ $category->slug }}">
                    <img src="img/category/{{ $category->slug }}.png">
                </a>
            </div>
            <span>{{ $category->name }}</span>
        </div>
        <!-- <div class="w-100"></div> -->
        @endforeach
    </div>

    <!--NEW ARRIVAL-------------------------------->
    <section class="new-arrival">

        <!--heading-------->
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <!-- <p>We Provide You New Fasion Design Clothes</p> -->
        </div>
        <!--products----------------------->
        <div class="d-flex flex-wrap">
            @foreach($products as $key=>$product)
                @if( $loop->first or $loop->iteration  <= 6 )
            <!-- single product -->
            <div class="card mb-3" style="max-width: 10rem;">
                <div class="card-body">

                    <div class="product-content">
                        <div class="product-img">
                            <img src="{{$product->image}}" alt="product image">
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                        <a href="/product/{{$product->id}}" class="product-name">{{$product->name}}</a>
                        <p class="product-price">Rp. {{$product->price}}</p>
                    </div>

                    <!-- <div class="off-info">
                            <h2 class="sm-title">21% off</h2>
                        </div> -->
                    <div class="product-btns">
                        <button type="button" class="btn-cart">
                            <span><i class="fas fa-plus"></i></span>
                        </button>
                        <button type="button" class="btn-buy">
                            <span><i class="fas fa-shopping-cart"></i></span>
                        </button>
                    </div>

                </div>
            </div>

                @endif
            <!-- end of single product -->
            @endforeach

        </div>
    </section>
    <!-- end of container -->
</div>




@endsection
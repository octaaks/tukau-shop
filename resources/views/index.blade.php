@extends('layouts/main')

@section('title', 'Home')

@section('container')

<!-- My CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<br> <br>
<!-- caraousel  -->

<div class="container">
    <!-- Content here -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="carousel/home1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/home2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/home3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/home4.jpg" alt="Third slide">
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
    </div>
</div>


<!-- end caraousel -->

<div class="arrival-heading">
    <strong>Category</strong>
</div>

<!--product-categories-slider---------------------->
<ul id="autoWidth" class="container" class="cs-hidden">
    <!--box-1--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="{{ url('/shope') }}">
                <img src="img/harvest.png">
            </a>
        </div>
        <span>Semua Produk</span>
    </li>
    <!--box-2--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="{{ url('/daging') }}">
                <img src="img/beef.png">
            </a>
        </div>
        <span>Daging</span>
    </li>
    <!--box-3--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/vegetable.png">
            </a>
        </div>
        <span>Sayur</span>
    </li>
    <!--box-4--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/chicken-leg.png">
            </a>
        </div>
        <span>Ayam</span>
    </li>
    <!--box-5--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/spinach.png">
            </a>
        </div>
        <span>Organik</span>
    </li>
    <!--box-6--------------------->


    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/seasoning.png">
            </a>
        </div>
        <span>Bumbu</span>
    </li>
    <!--box-7--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/crab.png">
            </a>
        </div>
        <span>Seafood</span>
    </li>

    <!--box-6--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/healthy-food.png">
            </a>
        </div>
        <span>Buah Segar</span>
    </li>


</ul>

<ul id="autoWidth" class="container" class="cs-hidden">
    <!--box-1--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/fish.png">
            </a>
        </div>
        <span>Ikan</span>
    </li>
    <!--box-2--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/dairy-products.png">
            </a>
        </div>
        <span>Susu, Telur dan Keju</span>
    </li>
    <!--box-3--------------------->

    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/diet.png">
            </a>
        </div>
        <span>Menu Sehat</span>
    </li>

    <!--box-4--------------------->

    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/carbohydrates.png">
            </a>
        </div>
        <span>Karbohidrat</span>
    </li>

    <!--box-5--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/milk.png">
            </a>
        </div>
        <span>Minuman</span>
    </li>


    <!--box-6--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/price-tag.png">
            </a>
        </div>
        <span>Spesial Promo</span>
    </li>


    <!--box-8--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/new.png">
            </a>
        </div>
        <span>Terbaru</span>
    </li>


    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="img/best.png">
            </a>
        </div>
        <span>Terlaris</span>
    </li>


</ul>




<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">

    <!--heading-------->
    <div class="arrival-heading">
        <strong>New Arrival</strong>
        <!-- <p>We Provide You New Fasion Design Clothes</p> -->
    </div>
    <!--products----------------------->
    <div class="product-container">

        <!--product-box-1---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <!--img------>
                <img src="img/anggur.jpg">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">anggur</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
        <!--product-box-2---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
                <!--img------>
                <img src="img/anggur1.jpg">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">anggur</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
        <!--product-box-3---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
                <!--img------>
                <img src="img/anggur.jpg">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">anggur</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>

        <!--product-box-4---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <!--img------>
                <img src="img/anggur1.jpg">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">anggur</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
    </div>
</section>



@endsection
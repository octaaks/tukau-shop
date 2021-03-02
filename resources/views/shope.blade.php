@extends('layouts/main')

@section('title', 'About')

@section('container')    

<link rel="stylesheet" href="{{asset('css/style1.css')}}"> 

 <!-- font awesome -->
 <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Special  Offers</h1>
                
               
                <div class = "product-items">
                @foreach($items as $item)
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/anggur1.jpg" alt = "product image"> 
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add to cart
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> buy now
                                    <span><i class = "fas fa-shopping-cart"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                             
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name">{{$item->name}}</a>
                            <p class = "product-price">{{$item->price}}</p>
                            <p class = "product-price">{{$item->price*0.8}}</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">21% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
	            @endforeach

                </div>
                
            </div>
        </div>

      
        
    </body>
</html>
@endsection


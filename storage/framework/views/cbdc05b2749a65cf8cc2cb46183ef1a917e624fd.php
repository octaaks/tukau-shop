

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('container'); ?>    

<link rel="stylesheet" href="<?php echo e(asset('css/style1.css')); ?>"> 

 <!-- font awesome -->
 <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Special  Offers</h1>
                
                <div class = "product-items">
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
                            <a href = "#" class = "product-name">Anggur Hijau</a>
                            <p class = "product-price">$ 150.00</p>
                            <p class = "product-price">$ 133.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "sm-title">21% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                </div>
                

            </div>
        </div>

      
        
    </body>
</html>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/shope.blade.php ENDPATH**/ ?>
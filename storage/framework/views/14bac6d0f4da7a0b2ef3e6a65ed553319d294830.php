

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('container'); ?>

<!-- My CSS -->
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">


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

    <div class="d-flex flex-wrap">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div align="center" class="category-box">
            <div class="feature-box">
                <a href="/shop/<?php echo e($category->slug); ?>">
                    <img src="img/category/<?php echo e($category->slug); ?>.png">
                </a>
            </div>
            <span ><?php echo e($category->name); ?></span>
        </div>
        <!-- <div class="w-100"></div> -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- single product -->
                <div class="card mb-3" style="max-width: 10rem;">
                    <div class="card-body">

                        <div class="product-content">
                            <div class="product-img">
                                <img src="<?php echo e($product->image); ?>" alt="product image">
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
                            <a href="#" class="product-name"><?php echo e($product->name); ?></a>
                            <p class="product-price">Rp. <?php echo e($product->price); ?></p>
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

                <!-- end of single product -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
    </section>
    <!-- end of container -->
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/index.blade.php ENDPATH**/ ?>
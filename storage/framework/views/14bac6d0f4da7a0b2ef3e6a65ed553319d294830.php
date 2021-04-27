

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('container'); ?>

<!-- My CSS -->
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

<!-- Content here -->

<!-- caraousel  -->
<div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="carousel/c_fruit.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="carousel/c_avocado.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="carousel/c_mango.jpg" alt="Third slide">
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
    <strong>Kategori</strong>
</div>

<div class="d-flex justify-content-center flex-wrap">

    <div align="center" class="category-box">
        <div class="feature-box">
            <a href="/shop/all">
                <img src="img/category/cart.png">
            </a>
        </div>
        <span>Semua Produk</span>
    </div>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div align="center" class="category-box">
        <div class="feature-box">
            <a href="/shop/<?php echo e($category->slug); ?>">
                <img src="img/category/<?php echo e($category->slug); ?>.png">
            </a>
        </div>
        <span><?php echo e($category->name); ?></span>
    </div>
    <!-- <div class="w-100"></div> -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">

    <!--heading-------->
    <div class="arrival-heading">
        <strong>Produk Baru</strong>
        <!-- <p>We Provide You New Fasion Design Clothes</p> -->
    </div>
    <!--products----------------------->
    <div class="d-flex justify-content-center flex-wrap">
        <!-- <div class="gallery"> -->

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if( $loop->first or $loop->iteration <= 6 ): ?> <div class="card product-card">
            <img class="card-img-top" src="<?php echo e($product->image); ?>" alt="Card image cap">
            <div class="card-body">

                <a href="/product/<?php echo e($product->id); ?>" class="product-name">
                    <h6 style="white-space: nowrap; overflow: hidden;"><?php echo e($product->name); ?>

                    </h6>
                </a>
                <p class="product-price">Rp. <?php echo e($product->price); ?></p>
                <div class="align-items-right text-right rating">
                    <p>5 <i class="fas fa-star"></i></p>
                </div>
                <a href='/add-to-cart/<?php echo e($product->id); ?>' class="btn buy-btn"><i class="fas fa-cart-plus"></i>
                    BUNGKUS</a>
            </div>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>
<!-- end of container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/index.blade.php ENDPATH**/ ?>
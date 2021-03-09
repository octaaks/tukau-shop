

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
        
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div align="center" class="">
            <div class="feature-box">
                <a href="/shope/<?php echo e($category->slug); ?>">
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
    <!-- end of container -->
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/index.blade.php ENDPATH**/ ?>
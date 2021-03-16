

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('container'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<!-- <link rel="stylesheet" href="<?php echo e(asset('css/style1.css')); ?>"> -->

<!-- font awesome -->
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="products">
        <div class="container">
        <a  href="/">Tukau Home</a> > <?php echo e($category); ?>


            <h2><?php echo e($category); ?></h2>

            <div class="d-flex flex-wrap">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- single product -->
                <div class="card  mb-3" style="max-width: 11rem;">
                    <div class="card-body">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="<?php echo e($item->image); ?>" alt="product image">
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
                            <a  href="/product/<?php echo e($item->id); ?>" class="product-name"><?php echo e($item->name); ?></a>
                            <p class="product-price">Rp. <?php echo e($item->price); ?></p>
                            <!-- <p class="product-price">Rp. <?php echo e($item->price*0.8); ?></p> -->
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

        </div>
    </div>



</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/shop.blade.php ENDPATH**/ ?>
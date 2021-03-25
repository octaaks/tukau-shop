

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
            <a href="/">Tukau Home</a> > <?php echo e($category); ?>

            <h2><?php echo e($category); ?></h2>
            <div class="d-flex flex-wrap">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="<?php echo e($product->image); ?>" alt="Card image cap">
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

                        <a href="/product/<?php echo e($product->id); ?>" class="product-name">
                            <h6 style="white-space: nowrap; overflow: hidden;" class="card-title"><?php echo e($product->name); ?>

                            </h6>
                        </a>
                        <p class="product-price">Rp. <?php echo e($product->price); ?></p>
                        <div class="row">
                            <div class="col-md-12">
                                <a href='add-to-cart/<?php echo e($product->id); ?>' class="btn btn-success buy-btn">BELI</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/shop.blade.php ENDPATH**/ ?>
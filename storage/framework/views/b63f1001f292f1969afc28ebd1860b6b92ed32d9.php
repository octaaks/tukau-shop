

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('container'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

<!-- font awesome -->
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="products">
        <div class="container">
            <div class="float-right"><a href="/">Tukau Home</a> > <?php echo e($category); ?></div>
            <h2><?php echo e($category); ?></h2>
            <div class="d-flex justify-content-start flex-wrap mt-4">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="card product-card">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/shop.blade.php ENDPATH**/ ?>
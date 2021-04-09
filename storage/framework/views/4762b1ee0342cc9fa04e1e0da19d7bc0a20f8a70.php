

<?php $__env->startSection('title', 'Lihat Produk'); ?>

<?php $__env->startSection('container'); ?>

<head>
    <title>ALL Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style_view.css')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- single product detail -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-6">
                <img src=<?php echo e($product->image); ?> width="100%" id="ProductImg">
            </div>
            <div class="col-6">
                <p><a  href="/">Tukau Home</a> > <a  href="/shop/<?php echo e($product->Categories()->first()->slug); ?>"><?php echo e($product->Categories()->first()->name); ?></a></p>
                <h1><?php echo e($product->name); ?></h1>
                <h4>Rp. <?php echo e($product->price); ?></h4>
                <h3><?php echo e($product->weight); ?>g</h3>

                <input type="number" value="1">
                <a href="/add-to-cart/<?php echo e($product->id); ?>" class="btn-buy">Add to chart</a>
                <h3>Deskripsi</h3>
                <br>
                <p> <?php echo e($product->description); ?></p>
            </div>
        </div>
    </div>

    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Relate Product</h2>
            <p><a  href="/shop/<?php echo e($product->Categories()->first()->slug); ?>">View More</a></p>
        </div>
    </div>
    <!-- product -->

    <div class="small-container">
        <div class="row">
            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if( $loop->first or $loop->iteration <= 4 ): ?> <div class="col-4">
                <img src=<?php echo e($r->image); ?>>
                <h4><?php echo e($r->name); ?></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. <?php echo e($r->price); ?></p>

                <div class="btn btn">Add to chart</div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/products/viewProduct.blade.php ENDPATH**/ ?>
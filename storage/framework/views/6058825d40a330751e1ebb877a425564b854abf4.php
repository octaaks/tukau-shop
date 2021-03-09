

<?php $__env->startSection('title', 'Lihat Produk'); ?>

<?php $__env->startSection('container'); ?>

    <div class="content">
        <div class="row">
            <div class="col">
                <?php echo e($product->name); ?>

            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/products/viewProduct.blade.php ENDPATH**/ ?>
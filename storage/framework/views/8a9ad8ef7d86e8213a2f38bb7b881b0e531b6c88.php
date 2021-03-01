

<?php $__env->startSection('container'); ?>


<?php
    $formTitle = !empty($product) ? 'update' : 'New'
?>

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border=bottom">
                    <h2> <?php echo e($formTitle); ?> Form Product </h2>
                </div>
                <div class="card-body">
                <?php echo $__env->make('partials.flash', ['$errors' => $errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <?php if(!empty($product)): ?>
                        <?php echo Form::model($product, ['url' => ['tukau/administrator/product/create', $product->id], 'method' => 'PUT' ]); ?>

                        <?php echo Form::hidden('id'); ?>

                    <?php else: ?>
                        <?php echo Form::open(['url' => 'tukau/administrator/product/create']); ?>

                    <?php endif; ?>
                        <div class="form-group">
                            <?php echo Form::label('name', 'Name'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Product name']); ?>

                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                        </div>
                        <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/formProduct.blade.php ENDPATH**/ ?>
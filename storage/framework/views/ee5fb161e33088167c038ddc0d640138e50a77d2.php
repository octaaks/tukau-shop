

<?php $__env->startSection('title', 'Kelola Product'); ?>

<?php $__env->startSection('container'); ?>

<div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                    
                    </div>
                    <div class="card-body">
                      
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>    
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->slug); ?></td>
                                        <td><?php echo e($product->parent_id); ?></td>
                                        <td>
                                            <a>edit</a>
                                            
                                         
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">No records found</td>
                                    </tr>
                                    <?php endif; ?>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(url('tukau/administrator/product/create')); ?>" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/manageProduct.blade.php ENDPATH**/ ?>
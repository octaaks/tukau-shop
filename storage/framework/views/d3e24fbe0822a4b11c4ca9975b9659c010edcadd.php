

<?php $__env->startSection('title', 'Kelola Product'); ?>

<?php $__env->startSection('container'); ?>

<div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                    
                    </div>
                    <div class="card-body">
                      
                    
                    <div class="card-footer text-right">
                        <a href="<?php echo e(url('tukau/administrator/product/create')); ?>" class="btn btn-primary">Add New</a>
                    </div>

                        <?php if(session('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($product->id); ?></th>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e($product->weight); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td width="20%">
                                        <a class="btn btn-primary  btn-sm" href="/tukau/administrator/product/<?php echo e($product->id); ?>/edit/" role="button">Edit</a>
                                        <a class="btn btn-danger  btn-sm" method="delete" href="/tukau/administrator/product/<?php echo e($product->id); ?>/delete" role="button">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/products/manageProduct.blade.php ENDPATH**/ ?>
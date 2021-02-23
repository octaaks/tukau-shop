

<?php $__env->startSection('title', 'Kelola Barang'); ?>

<?php $__env->startSection('container'); ?>

<div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Categories</h2>
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
                              
                                    <tr>    
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a>edit</a>
                                            
                                         
                                    </tr>
                               
                                    <tr>
                                        <td colspan="5">No records found</td>
                                    </tr>
                               
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(url('admin/categories/create')); ?>" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/manageBarang.blade.php ENDPATH**/ ?>
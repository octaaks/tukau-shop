

<?php $__env->startSection('title', 'Kelola Pengguna'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Pengguna
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($user->id); ?></th>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->address); ?></td>
                                <td><?php echo e($user->no_hp); ?></td>
                                <td width="20%">
                                    <a class="btn btn-primary  btn-sm" href="<?php echo e($user->id); ?>/edit/" role="button">Edit</a>
                                    <a class="btn btn-danger  btn-sm" method="delete" href="/tukau/administrator/user/<?php echo e($user->id); ?>/delete" role="button">Delete</a>
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
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/manageUser.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Kelola Pengguna'); ?>

<?php $__env->startSection('container'); ?>

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('adm/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/dist/css/adminlte.min.css')); ?>">
</head>

<div class="content">
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
                        
                    <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>

                    <table id="tb1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($user->id); ?></th>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->no_hp); ?></td>
                                <td><?php echo e($user->address); ?></td>
                                <td><?php echo e($user->Roles()->first()->name); ?></td>
                                <td width="20%">
                                    <a class="btn btn-primary  btn-sm" href="/tukau/administrator/user/<?php echo e($user->id); ?>/edit/" role="button">Edit</a>
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

<!-- jQuery -->
<script src="<?php echo e(asset('adm/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<!-- <script src="<?php echo e(asset('adm/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script> -->
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('adm/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('adm/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

<!-- <script src="<?php echo e(asset('daterangepicker/newpicker.js')); ?>"></script> -->
<!-- Page specific script -->
<script>

    jQuery(document).ready(function ($) {
        /* now you can use $ */

        $("#tb1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tb1_wrapper .col-md-6:eq(0)');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/manageUser.blade.php ENDPATH**/ ?>
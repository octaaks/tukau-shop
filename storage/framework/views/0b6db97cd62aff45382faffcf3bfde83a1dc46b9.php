

<?php $__env->startSection('title', 'Pesanan Diproses'); ?>

<?php $__env->startSection('container'); ?>

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adm/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('adm/dist/css/adminlte.min.css')); ?>">
</head>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-body">
                    <!-- <div class="card-footer text-left">
                        <a href="<?php echo e(url('tukau/administrator/product/create')); ?>" class="btn btn-primary">Add New</a>
                    </div> -->

                    <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>

                    <h5>Pesanan Diproses</h5>
                    <table id="tb1" class="table table-bordered table-striped mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Total</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Metode Bayar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order->order_number); ?></td>
                                <td><?php echo e($order->fullname); ?></td>
                                <td><?php echo e($order->status); ?></td>
                                <td>Rp. <?php echo e($order->grand_total); ?></td>
                                <td><?php echo e($order->address); ?></td>
                                <td><?php echo e($order->payment_method); ?></td>
                                <td width="20%">
                                    <a class="btn btn-primary  btn-sm" href="/orderView/<?php echo e($order->id); ?>"
                                        role="button">Lihat</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Batal
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin
                                                membatalkan
                                                pesanan ini?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <a class="btn btn-danger" method="delete"
                                                href="/order/<?php echo e($order->id); ?>/cancel" role="button">Batalkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                    <!-- Button trigger modal -->

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
jQuery(document).ready(function($) {
    /* now you can use $ */

    $("#tb1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    }).buttons().container().appendTo('#tb1_wrapper .col-md-6:eq(0)');
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/order/proccessed.blade.php ENDPATH**/ ?>
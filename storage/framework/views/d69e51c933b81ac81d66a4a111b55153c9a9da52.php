

<?php $__env->startSection('title', 'Kelola Cat'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Barang
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">kategori</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>

                         
                            <tr>
                                <th scope="row">1</th>
                                <td>---</td>
                                <td>---</td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/manageCategory.blade.php ENDPATH**/ ?>
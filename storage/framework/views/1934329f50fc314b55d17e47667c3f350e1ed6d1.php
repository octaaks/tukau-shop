

<?php $__env->startSection('title', 'Lihat Keranjang'); ?>

<?php $__env->startSection('container'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->name); ?></td>
                        <td>Rp. <?php echo e($item->price); ?></td>
                        <td>Rp. <?php echo e(Cart::session(auth()->id())->get($item->id)->getPriceSum()); ?></td>
                        <td width="15%">
                            <form method="POST" action="/cart/update/<?php echo e($item->id); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="d-flex">
                                    <input name="quantity" type="number" class="form-control" value=<?php echo e($item->quantity); ?>>
                                    <input class="btn btn-outline-secondary" type="submit" value="Simpan">
                                </div>
                            </form>

                        </td>
                        <td width="20%">
                            <a class="btn btn-danger btn-sm" method="delete" href="/cart/destroy/<?php echo e($item->id); ?>"
                                role="button">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Total : Rp. <?php echo e(Cart::session(auth()->id())->getTotal()); ?></h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary" method="delete" href="/cart/destroy/<?php echo e($item->id); ?>"
                            role="button">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/cart/index.blade.php ENDPATH**/ ?>
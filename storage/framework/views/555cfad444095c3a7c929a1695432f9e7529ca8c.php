

<?php $__env->startSection('title', 'Proses Pesanan'); ?>

<?php $__env->startSection('container'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="card">

            <div class="card-body">
                <h5><?php echo e($order->order_number); ?></h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo e($order->fullname); ?></td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>:</td>
                            <td><?php echo e($order->phone); ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo e($order->address); ?>, <?php echo e($order->city); ?>, <?php echo e($order->zipcode); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Status pesanan</td>
                            <td>:</td>
                            <td><?php echo e($order->status); ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp. <?php echo e($order->grand_total); ?></td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>:</td>
                            <td><?php echo e($order->payment_method); ?></td>
                        </tr>
                        <tr>
                            <td>Item</td>
                            <td>:</td>
                            <td>
                                <ul>
                                    <?php $__currentLoopData = $order->items()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($item->pivot->quantity); ?> <?php echo e($item->name); ?> = Rp. <?php echo e($item->price); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-info mt-2 " href="/cart/checkout" role="button">Proses Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tukau\resources\views/order/view.blade.php ENDPATH**/ ?>
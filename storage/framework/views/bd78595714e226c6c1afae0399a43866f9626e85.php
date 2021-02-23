<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Anjayyy!</strong>
        Ada yang salah cuk.<br/><br/>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success"> <?php echo e(session('success')); ?> </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger"> <?php echo e(session('error')); ?> </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\project-tukau\resources\views/partials/flash.blade.php ENDPATH**/ ?>
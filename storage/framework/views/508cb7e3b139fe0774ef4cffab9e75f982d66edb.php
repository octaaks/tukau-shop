

<?php $__env->startSection('title', 'Tentang Kami'); ?>

<?php $__env->startSection('container'); ?>    

<link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>"> 

HTML:

<!DOCTYPE html>
<html lang="es">
 <head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Caja de Busqueda con efecto</title>
 </head>
 <body>
  <div class="buscar-caja">
   <input type="text" name="" class="buscar-txt" placeholder="Buscar..."/>
   <a class="buscar-btn">
    <i class="far fa-search"></i>
   </a>
  </div>
 </body>
</html>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Warung\resources\views/coba.blade.php ENDPATH**/ ?>
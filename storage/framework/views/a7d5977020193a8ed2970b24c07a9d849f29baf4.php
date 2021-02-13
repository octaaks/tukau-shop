

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('container'); ?>    

   <!-- My CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('css/style1.css')); ?>"> 


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">s
    <div class="carousel-item active">
      <img src="img/home2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	<!-- dish section starts  -->
<!-- 
<section id="dish" class="container1">

<div class="heading text-center">
    <h1>Promo<span>Spesial</span></h1>
</div>

<div class="box-container1">

    <div class="box">
        <img src="img/lemon.jpg" alt="">
        <div class="info">
            <h3>dish1</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
            <a href="#"><button>view</button></a>
        </div>
    </div>

    <div class="box">
        <img src="img/home2.jpg" alt="">  
        <div class="info">
            <h3>dish2</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
            <a href="#"><button>view</button></a>
        </div>
    </div>

    <div class="box">
        <img src="img/home3.jpg" alt="">
        <div class="info">
            <h3>dish3</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
            <a href="#"><button>view</button></a>
        </div>
    </div>

    

</div>

</section> -->

<!-- dish section ends  -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Warung\resources\views/index.blade.php ENDPATH**/ ?>
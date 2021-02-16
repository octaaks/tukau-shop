<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"> 

  <title> <?php echo $__env->yieldContent('title'); ?></title>
  
  </head>
  <body>
   
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/">Warunk!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <!-- ml-auto untuk membuat navnya nempel ke kanan -->
          <div class="navbar-nav ml-auto">
            <a class="nav item nav-link" href="<?php echo e(url('/warta')); ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo e(url('/about')); ?>">About </a>
            <a class="nav-item nav-link" href="<?php echo e(url('/coba')); ?>">Product</a>    
          </div>
          
          <!-- <style>
              .boxContainer{
                position:relative;
                width:210px;
                border:4px solid black;
                padding: 0px 5px;
                border-radius:50px
              }
              .elementsContainer{
                width: 100%;
                height: 100%;
                vertical-align: middle;
              }
              .search{
                border: none;
                height: 100%;
                width: 100%;
                padding: 0px 5px;
                border-radius: 50px;
                font-size: 18px;
                font-family: "Nunito";
                font-weight: 500;
              }
              .search:focus{
                outline: none;
              }
              .material-icons{
                font-size:25;
                color: yellow;
              }
          </style>
         
            <div class="boxContainer">
                <table class="elementsContainer">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search">
                        </td>   
                        <td>
                            <a href="#"> <i class="fas fa-search"></i>
                        </td> 
                    </tr>
                </table>
            </div>
         -->
        
        
        </div>
      </div>
    </nav>

    

   <?php echo $__env->yieldContent('container'); ?>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Warung\resources\views/layout/main.blade.php ENDPATH**/ ?>
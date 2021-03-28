<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukau</title>

    <link rel="shortcut icon" href="../favicon.ico">
    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/bc0b680321.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


    <title> <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <!--header-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar " style="background-color:rgb(0, 179, 60)">
                <a class="my-md-3 site-title text-white" style="margin-right:25px" href="/">
                    <h3>Tukau</h3>
                </a>

                <a href="/cart" class="btn border">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge badge-danger navbar-badge">
                        <?php if(auth()->guard()->check()): ?>
                            <?php echo e(Cart::session(auth()->id())->getContent()->count()); ?>

                        <?php else: ?>
                            0
                        <?php endif; ?>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">

                            <?php if(auth()->guard()->check()): ?>

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b style="color: #FFFFFF;">Kategori</b>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="dropdown-item" href="/shop/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <?php endif; ?>
                        </li>
                    </ul>

                    <?php if(auth()->guard()->check()): ?>
                    <form class="form-inline my-2 my-lg-0" action="/search" method="GET">
                        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <!-- <button class="btn" type="submit"><i class="fa fa-search"></i></button> -->
                    </form>
                    <?php endif; ?>

                    <div class="text-right">
                        <ul class="px-2 navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                            <p class="my-md-4 header-links">

                                <?php if(Route::has('login')): ?>

                                <a href="<?php echo e(route('login')); ?>" class="px-2"> Sign In</a>
                                <!-- <li class="nav-item">
                                <a class="px-2 nav-link" href="<?php echo e(route('login')); ?>"></a>
                            </li> -->
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="px-2"> Create Account </a>
                                <!-- <li class="nav-item">
                                <a class="px-2 nav-link" href="<?php echo e(route('register')); ?>"></a>
                            </li> -->
                                <?php endif; ?>

                            </p>

                            <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b style="color: #FFFFFF;"><?php echo e(Auth::user()->name); ?></b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" -->
                                    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                                    <a class="dropdown-item" href="/tukau/administrator/index">
                                        Dashboard
                                    </a>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--end header-->
    <div class="container mt-3">
        <?php echo $__env->yieldContent('container'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="./js/main.js"></script> -->
</body>

</html><?php /**PATH C:\xampp\htdocs\tukau\resources\views/layouts/main.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('constants.site_title','Moob Urban')); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(config('constants.site_icon')); ?>"/>

    <link href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        

        <div id="page-content-wrapper">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button> -->

                            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(config('constants.site_logo', asset('logo-black.png'))); ?>"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php if(Request::url() == url('/ride')): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(url('/ride')); ?>">Ride</a>
                                </li>
                                <li <?php if(Request::url() == url('/drive')): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(url('/drive')); ?>">Drive</a>
                                </li>
                                 <li><a href="<?php echo e(url('help')); ?>">Help</a></li>
                                  
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li><a class="btn-outline" href="<?php echo e(url('/register')); ?>">Signup to Ride</a></li>
                                <li><a class="menu-btn" href="<?php echo e(url('/provider/register')); ?>">Signup to Drive</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <?php echo $__env->yieldContent('content'); ?>
          


    </div>
</div>

<script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/scripts.js')); ?>"></script>

 <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/layout/client.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?><?php echo e(Setting::get('site_title', 'Tranxit')); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(Setting::get('site_icon')); ?>"/>


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    <link href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <section class="hero is-info is-fullheight">
        <div class="log-overlay"></div>
            <div class="full-page-bg-inner">
                <div class="row no-margin">
                    <div class="col-md-6 log-left">
                        <span class="login-logo"><img src="<?php echo e(Setting::get('site_logo', asset('asset/img/logo.png'))); ?>"></span>
                        <h2><?php echo e(Setting::get('site_title','Thinkin Service')); ?> needs partners like you.</h2>
                        <p>Partner with <?php echo e(Setting::get('site_title','Thinkin Service')); ?> and earn great money as an independent contractor. Get paid weekly just for helping our community of Partners get to Services lead around town. Be your own boss and get paid in fares for Services on your own schedule.</p>
                    </div>
                    <div class="col-md-6 log-right">
                        <div class="login-box-outer">
                            <div class="login-box row no-margin">
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                            <div class="log-copy"><p class="no-margin">&copy; <?php echo e(date('Y')); ?> <?php echo e(Setting::get('site_title', '&copy; 20020 dragon')); ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/layout/auth.blade.php ENDPATH**/ ?>
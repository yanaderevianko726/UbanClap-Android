<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('constants.site_title','Thinkin Services')); ?> - <?php echo $__env->yieldContent('title'); ?> - Admin Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo e(config('constants.site_icon')); ?>" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/adminpanel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/aside.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('dist/switchery.min.css')); ?>" />

    <?php echo $__env->yieldContent('styles'); ?>
    <!-- <?php echo \Livewire\Livewire::styles(); ?> -->
    <style>
    </style>
</head>
<body class="has-navbar-fixed-top ">
    <?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="columns is-variable is-0">

        <?php echo $__env->make('admin.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div id="app" class="p-1">
          <div class="columns is-variable is-desktop">
            <div class="column">
              <h1 class="title">
                <?php echo $__env->yieldContent('title'); ?>
              </h1>
            </div>
            <div class="column">
              <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="column is-1">
              <?php if(Request::segment(2) != 'dashboard'): ?>
              <a href="<?php echo e(URL::previous()); ?>" class="button is-default is-hidden-mobile	is-pulled-right	"><?php echo app('translator')->getFromJson('admin.back'); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <?php echo $__env->yieldContent('content'); ?>
          <?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>
    </div>
    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/switchery.min.js')); ?>"></script>
    <script>
      function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
    <!-- <?php echo \Livewire\Livewire::scripts(); ?> -->
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('constants.site_title','Thinkin Services')); ?> - <?php echo $__env->yieldContent('title'); ?> - User Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo e(config('constants.site_icon')); ?>" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body >

    

    
    <?php echo $__env->make('user.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        
    <div class="columns">
        <div class="column is-3 ">
            <?php echo $__env->make('user.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="column is-9 ">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    </div>   
            

        


    <?php echo $__env->make('user.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php if(Setting::get('demo_mode', 0) == 1): ?>
        
        
    <?php endif; ?>
    
    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>


</body>
</html><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/layout/base.blade.php ENDPATH**/ ?>
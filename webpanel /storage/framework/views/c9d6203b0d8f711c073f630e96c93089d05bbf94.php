<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('constants.site_title','Thinki Services')); ?> - <?php echo $__env->yieldContent('title'); ?> - User Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo e(config('constants.site_icon')); ?>" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body style="@media (prefers-color-scheme: dark) ">
    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/layout/auth.blade.php ENDPATH**/ ?>
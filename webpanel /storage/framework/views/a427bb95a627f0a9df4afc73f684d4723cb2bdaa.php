<?php $__env->startSection('title', 'Translation '); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
        	<div class="embed-responsive embed-responsive-16by9">
            	<iframe src="<?php echo e(url('translations')); ?>" allowfullscreen style="width: 100%;height: 800px;border:none;" class="embed-responsive-item"></iframe>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/translation.blade.php ENDPATH**/ ?>
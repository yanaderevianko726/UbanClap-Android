<?php $__env->startSection('title', 'Notifications '); ?>

<?php $__env->startSection('content'); ?>

<div class="column is-9">
<div class="dash-content">
<!-- notifications start-->
<div class="notify">
    <h2>notifications</h2>
    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="notify-sec">    
       <div class="row m-0 whlnot">
           <div class="notify-img no ">
           <?php if($notify->image): ?> 
            <img src="<?php echo e($notify->image); ?>" class="img-responsive" alt="image">
             <?php else: ?>
             N/A
            <?php endif; ?>
            </div>
            <div class="notify-content">
                <h5><?php echo e(date('F d, Y, h:i A', strtotime($notify->created_at))); ?></h5>
                <p><?php echo e(str_limit($notify->description, $limit = 100, $end = '...')); ?></p>
            </div>
       </div>
            
    </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
</div>
<!-- notifications end-->
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/notification/index.blade.php ENDPATH**/ ?>
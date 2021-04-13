
<div class="columns is-variable is-multiline is-desktop">
    <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="column">
        <?php if(($child == 0 )): ?>
        <a href="<?php echo e(url('dashboard')); ?>?service=<?php echo e($service->id); ?>" class="sel-ser-link">
        <?php else: ?>
        <a wire:click="getchild(<?php echo e($service->id); ?>)" class="sel-ser-link">
        <?php endif; ?>
        <div class="card">
          <header class="card-header" style="height:220px; background-image: url(<?php echo e(img($service->image)); ?>);">
            <p class="card-header-title"><?php echo e($service->name); ?>

            </p>
        </header>
        </div></a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No services in your area</p> 
<?php endif; ?>
</div>


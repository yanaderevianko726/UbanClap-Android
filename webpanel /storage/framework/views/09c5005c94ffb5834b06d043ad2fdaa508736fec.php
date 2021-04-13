<div>
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="column">
      <a wire:click="checkchild(<?php echo e($service); ?>,<?php echo e($service->id); ?>)" class="sel-ser-link">
        <div class="card">
          <header class="card-header" style="height:220px; background-image: url(<?php echo e(img($service->image)); ?>);">
            <p class="card-header-title"><?php echo e($service->name); ?>

            </p>
        </header>
        </div></a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/livewire/service-child.blade.php ENDPATH**/ ?>
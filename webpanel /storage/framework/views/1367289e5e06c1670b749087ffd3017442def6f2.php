<tbody>
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($index + 1); ?></td>
        <td><?php echo e($service->name); ?></td>
        <td><?php echo app('translator')->getFromJson('servicetypes.'.$service->calculator); ?></td>
        <td>
            <?php if($service->image): ?>
            <img src="<?php echo e($service->image); ?>" style="height: 50px">
            <?php else: ?>
            N/A
            <?php endif; ?>
        </td>
        <td>
            <?php if($service->marker): ?>
            <img src="<?php echo e($service->marker); ?>" style="height: 50px">
            <?php else: ?>
            N/A
            <?php endif; ?>
        </td>
        <td>

            <form action="<?php echo e(route('admin.service.destroy', $service->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
                <a href="<?php echo e(route('admin.service.create').'?parent_id='.$service->id); ?>"
                    style="margin-left: 1em;" class="button is-link"><i class="fa fa-plus"></i>
                    Add Sub in </a>
                <?php endif; ?>
                <?php if( Setting::get('demo_mode', 0) == 0): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-edit')): ?>
                <a href="<?php echo e(route('admin.service.edit', $service->id)); ?>"
                    class="button is-info btn-block">
                    <i class="fa fa-pencil"></i> <?php echo e(__('admin.edit')); ?>

                </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-delete')): ?>
                <button class="button  is-danger is-link btn-block"
                    onclick="return confirm('Are you sure?')">
                    <i class="fa fa-trash"></i> <?php echo e(__('admin.delete')); ?>

                </button>
                <?php endif; ?>
                <?php endif; ?>
            </form>
        </td>
    </tr>

    <?php $__currentLoopData = $service->childrenRecursive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('admin.service.service', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</tbody>
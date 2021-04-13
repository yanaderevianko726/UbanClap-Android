
    <td></td>
    <td><?php echo e($child_category->parent_id); ?>-><?php echo e($child_category->id); ?></td>
    <td><?php echo e($child_category->name); ?></td>
    <td><?php echo app('translator')->getFromJson('servicetypes.'.$child_category->calculator); ?></td>
    <td>
        <?php if($child_category->image): ?>
            <img src="<?php echo e($child_category->image); ?>" style="height: 50px" >
        <?php else: ?>
            N/A
        <?php endif; ?>
    </td>
    <td>
        <form action="<?php echo e(route('admin.service.destroy', $child_category->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?>
        <a href="<?php echo e(route('admin.service.create').'?parent_id='.$child_category->id); ?>" style="margin-left: 1em;"
        class="button is-link"><i class="fa fa-plus"></i> Add New S. Sub </a>
        <?php endif; ?>
            <?php if( Setting::get('demo_mode', 0) == 0): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-edit')): ?>
                    <a href="<?php echo e(route('admin.service.edit', $child_category->id)); ?>" class="button is-info btn-block">
                        <i class="fa fa-pencil"></i> <?php echo e(__('admin.edit')); ?>

                    </a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-delete')): ?>
                    <button class="button  is-danger is-link btn-block" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-trash"></i> <?php echo e(__('admin.delete')); ?>

                    </button>
                <?php endif; ?>
            <?php endif; ?>
        </form>
    </td>

<?php if($child_category->childrenRecursive): ?>
    <tr>
        <?php $__currentLoopData = $child_category->childrenRecursive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('admin.service.service', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
<?php endif; ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/service/service.blade.php ENDPATH**/ ?>
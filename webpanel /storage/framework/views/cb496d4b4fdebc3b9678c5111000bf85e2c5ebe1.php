<?php $__env->startSection('title', 'Adicionar Função '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="<?php echo e(URL::previous()); ?>" class="button is-default pull-right"><i class="fa fa-angle-left"></i> <?php echo app('translator')->getFromJson('admin.back'); ?></a>

            <h5 style="margin-bottom: 2em;"><?php echo app('translator')->getFromJson('admin.roles.add_role'); ?></h5>

            <form  action="<?php echo e(route('admin.role.store')); ?>" method="POST" role="form">
                <?php echo e(csrf_field()); ?>

                <div class="field">
                    <label for="name" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.roles.role_name'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e(old('name')); ?>" name="name" required id="name" placeholder="<?php echo app('translator')->getFromJson('admin.name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="permission" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.permissions'); ?></label>
                    <div class="control">
                        <?php $val = ""; ?>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($value->group_name != $val): ?> 
                        <?php $val = $value->group_name; ?>
                        <h5><?php echo e($value->group_name); ?></h5>
                        <?php endif; ?>
                        <label style="margin-right: 20px; margin-bottom: 20px;"><input type="checkbox" class="control" value="<?php echo e($value->id); ?>" name="permission[]" id="permission" />
                        <?php echo e($value->display_name); ?></label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="col-xs-12 label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.roles.add_role'); ?></button>
                        <a href="<?php echo e(route('admin.role.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>
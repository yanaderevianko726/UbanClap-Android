<?php $__env->startSection('title', __('admin.account-manager.add_account_manager')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="<?php echo e(route('admin.account-manager.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>

                <div class="field">
                    <label for="name" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e(old('name')); ?>" name="name" required id="name" placeholder="<?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.email'); ?></label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="<?php echo app('translator')->getFromJson('admin.email'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.password'); ?></label>
                    <div class="control">
                        <input  class="input" type="password" name="password" id="password" placeholder="<?php echo app('translator')->getFromJson('admin.password'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="password_confirmation" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.account-manager.password_confirmation'); ?></label>
                    <div class="control">
                        <input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="<?php echo app('translator')->getFromJson('admin.account-manager.password_confirmation'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.mobile'); ?></label>
                    <div class="control">
                        <input  class="input" type="number" value="<?php echo e(old('mobile')); ?>" name="mobile" required id="mobile" placeholder="<?php echo app('translator')->getFromJson('admin.mobile'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="col-xs-12 label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.account-manager.add_account_manager'); ?></button>
                        <a href="<?php echo e(route('admin.account-manager.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/account-manager/create.blade.php ENDPATH**/ ?>
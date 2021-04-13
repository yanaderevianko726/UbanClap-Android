<?php $__env->startSection('title', __('admin.account.change_password')); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form action="<?php echo e(route('admin.password.update')); ?>" method="POST" role="form">
                <?php echo e(csrf_field()); ?>


                <div class="field">
                    <label for="old_password" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.account.old_password'); ?></label>
                    <div class="control">
                        <input  class="input" type="password" name="old_password" id="old_password" placeholder="<?php echo app('translator')->getFromJson('admin.account.old_password'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.account.password'); ?></label>
                    <div class="control">
                        <input  class="input" type="password" name="password" id="password" placeholder="<?php echo app('translator')->getFromJson('admin.account.password'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="password_confirmation" class="col-xs-12 label"><?php echo app('translator')->getFromJson('admin.account.password_confirmation'); ?></label>
                    <div class="control">
                        <input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="<?php echo app('translator')->getFromJson('admin.account.password_confirmation'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="col-xs-12 label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.account.change_password'); ?></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/account/change-password.blade.php ENDPATH**/ ?>
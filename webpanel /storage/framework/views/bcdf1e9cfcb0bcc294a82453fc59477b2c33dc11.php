<?php $__env->startSection('title', __('admin.account-manager.update_account_manager')); ?>

<?php $__env->startSection('content'); ?>

        <div class="box is-block">

            <form  action="<?php echo e(route('admin.account-manager.update', $account->id )); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label"><?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e($account->name); ?>" name="name" required id="name" placeholder="<?php echo app('translator')->getFromJson('admin.account-manager.full_name'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label"><?php echo app('translator')->getFromJson('admin.email'); ?></label>
                    <div class="control">
                        <input  class="input" type="text" value="<?php echo e($account->email); ?>" name="email" required id="email" placeholder="<?php echo app('translator')->getFromJson('admin.email'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="label"><?php echo app('translator')->getFromJson('admin.mobile'); ?></label>
                    <div class="control">
                        <input  class="input" type="number" value="<?php echo e($account->mobile); ?>" name="mobile" required id="mobile" placeholder="<?php echo app('translator')->getFromJson('admin.mobile'); ?>">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label"><?php echo app('translator')->getFromJson('admin.password'); ?></label>
                    <div class="control">
                        <input type="password" class="input" name="password" placeholder="<?php echo app('translator')->getFromJson('admin.password'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label"><?php echo app('translator')->getFromJson('admin.account-manager.password_confirmation'); ?></label>
                    <div class="control">
                        <input type="password" class="input" name="password_confirm" placeholder="<?php echo app('translator')->getFromJson('admin.account-manager.password_confirmation'); ?>">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link"><?php echo app('translator')->getFromJson('admin.account-manager.update_account_manager'); ?></button>
                        <a href="<?php echo e(route('admin.account-manager.index')); ?>" class="button is-default"><?php echo app('translator')->getFromJson('admin.cancel'); ?></a>
                    </div>
                </div>
            </form>
        </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/account-manager/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Change Password '); ?>

<?php $__env->startSection('content'); ?>

 <div class="profile-content gray-bg pad50">
    <div class="container">
        <div class="dash-content">
            <div class="row no-margin">
                <div class="column">
                    <h4 class="page-title"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></h4>
                </div>
            </div>
            <?php if(Setting::get('demo_mode', 0) == 1): ?>
                <div class="alert alert-danger">
                     <?php echo app('translator')->getFromJson('admin.demomode'); ?>
                </div>
            <?php else: ?>
                <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <div class="row no-margin edit-pro">
                <form action="<?php echo e(route('provider.password.update')); ?>" method="post">          
                <?php echo e(csrf_field()); ?>

                    <div class="column">
                        <div class="field">
                            <label><?php echo app('translator')->getFromJson('user.profile.old_password'); ?></label>
                            <input type="password" name="old_password" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.old_password'); ?>">
                        </div>
                        <div class="field">
                            <label><?php echo app('translator')->getFromJson('user.profile.password'); ?></label>
                            <input type="password" name="password" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.password'); ?>">
                        </div>

                        <div class="field">
                            <label><?php echo app('translator')->getFromJson('user.profile.confirm_password'); ?></label>
                            <input type="password" name="password_confirmation" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.confirm_password'); ?>">
                        </div>
                      
                        <div>
                            <button type="submit" class="form-sub-btn big"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('provider.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/profile/change_password.blade.php ENDPATH**/ ?>
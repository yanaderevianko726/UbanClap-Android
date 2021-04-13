<?php $__env->startSection('title', 'Change Password '); ?>

<?php $__env->startSection('content'); ?>
<section class="hero is-info welcome is-small">
    <div class="hero-body">
        <div class="container">
            <h4 class="title"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></h4>
            <h4 class="subtitle">
                Keep password strong to secure personal info
            </h4>
        </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
        <?php if(config('constants.demo_mode', 0) == 1): ?>
            <div class="alert alert-danger">
                 <?php echo app('translator')->getFromJson('admin.demomode'); ?>
            </div>
        <?php else: ?>
            <?php echo $__env->make('common.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div class="columns">
            <form action="<?php echo e(url('change/password')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

                <div class="column">
                    <div class="field">
                        <label><?php echo app('translator')->getFromJson('user.profile.old_password'); ?></label>

                            <div class="control">
                        <input type="password" name="old_password" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.old_password'); ?>">
                            </div>
                    </div>
                    <div class="field">
                        <label><?php echo app('translator')->getFromJson('user.profile.password'); ?></label>
                        <div class="control">
                        <input type="password" name="password" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.password'); ?>">
                    </div>
                    </div>
                    <div class="field">
                        <div class="control">
                        <label><?php echo app('translator')->getFromJson('user.profile.confirm_password'); ?></label>
                        <input type="password" name="password_confirmation" class="input" placeholder="<?php echo app('translator')->getFromJson('user.profile.confirm_password'); ?>">
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-link big"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/account/change_password.blade.php ENDPATH**/ ?>
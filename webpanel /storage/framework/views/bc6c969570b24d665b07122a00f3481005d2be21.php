<!-- Main Content -->
<?php $__env->startSection('content'); ?>
<div class="sign-form">
    <div class="row">
        <div class="col-md-4 offset-md-4 px-3">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5><?php echo app('translator')->getFromJson('admin.auth.reset_password'); ?></h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="<?php echo e(url('/admin/password/email')); ?>" >
                <?php echo e(csrf_field()); ?>

                    <div class="field <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required="true" id="email" placeholder="Email">
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase"><?php echo app('translator')->getFromJson('admin.auth.send_password_reset_link'); ?></button>
                    </div>
                </form>
                <div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="<?php echo e(url('/admin/login')); ?>"><span class="underline"><?php echo app('translator')->getFromJson('admin.auth.login_here'); ?>!</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/auth/passwords/email.blade.php ENDPATH**/ ?>
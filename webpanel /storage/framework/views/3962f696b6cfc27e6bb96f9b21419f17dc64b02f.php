<!-- Main Content -->
<?php $__env->startSection('content'); ?>

    <div class="col-md-12">
        <a class="log-blk-btn" href="<?php echo e(url('/provider/login')); ?>"><?php echo app('translator')->getFromJson('provider.signup.already_have_acc'); ?></a>
        <h3><?php echo app('translator')->getFromJson('provider.signup.reset_password'); ?></h3>
    </div>
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <form role="form" method="POST" action="<?php echo e(url('/provider/password/email')); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="col-md-12">
            <input type="email" class="input" name="email" placeholder="<?php echo app('translator')->getFromJson('provider.signup.email_address'); ?>" value="<?php echo e(old('email')); ?>">

            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>                        
        </div>

        <div class="col-md-12">
            <button class="log-teal-btn" type="submit"><?php echo app('translator')->getFromJson('provider.signup.send_password_reset_link'); ?></button>
        </div>
    </form>     


<?php $__env->stopSection(); ?>



<?php echo $__env->make('provider.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/provider/auth/passwords/email.blade.php ENDPATH**/ ?>
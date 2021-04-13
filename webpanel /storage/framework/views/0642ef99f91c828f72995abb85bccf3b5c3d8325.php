<!-- Main Content -->
<?php $__env->startSection('content'); ?>
<div class="sign-form">
    <div class="row">
        <div class="col-md-4 offset-md-4 px-3">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5>Reset Password</h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="<?php echo e(url('/fleet/password/email')); ?>" >
                <?php echo e(csrf_field()); ?>

                    <div class="field <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required="true" class="input" id="email" placeholder="Email">
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase">Send Password Reset Link</button>
                    </div>
                </form>
                <div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="<?php echo e(url('/fleet/login')); ?>"><span class="underline">Login Here!</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('fleet.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/fleet/auth/passwords/email.blade.php ENDPATH**/ ?>
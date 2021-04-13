<?php $__env->startSection('content'); ?>
<div class="sign-form">
    <div class="row">
        <div class="col-md-4 offset-md-4 px-3">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5>Reset Password</h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="<?php echo e(url('/fleet/password/reset')); ?>" >
                
                <?php echo e(csrf_field()); ?>

                
                <input type="hidden" name="token" value="<?php echo e($token); ?>">

                    <div class="field <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" name="email" value="<?php echo e($email or old('email')); ?>" autofocus required="true" class="input" id="email" placeholder="Email">
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="field <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" name="password" required="true" class="input" id="password" placeholder="Password">
                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="field <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                        <input type="password" name="password_confirmation" required="true" class="input" id="password_confirmation" placeholder="Password">
                        <?php if($errors->has('password_confirmation')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('fleet.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/fleet/auth/passwords/reset.blade.php ENDPATH**/ ?>
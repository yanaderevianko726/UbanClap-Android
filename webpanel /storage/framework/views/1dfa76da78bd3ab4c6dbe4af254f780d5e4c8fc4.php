<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <a class="log-blk-btn" href="<?php echo e(url('/provider/register')); ?>">ALREADY HAVE AN ACCOUNT?</a>    
    <h3><?php echo app('translator')->getFromJson('provider.signup.reset_password'); ?></h3>
</div>
<div class="col-md-12">
    <form role="form" method="POST" action="<?php echo e(url('/provider/password/reset')); ?>">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="token" value="<?php echo e($token); ?>">
        <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->getFromJson('user.profile.email'); ?>" autofocus>

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>

        <input id="password" type="password" class="input" name="password" placeholder="<?php echo app('translator')->getFromJson('provider.signup.password'); ?>">

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
        
        <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Re-type Password">

        <?php if($errors->has('password_confirmation')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
            </span>
        <?php endif; ?>
        
        <br>

        <button type="submit" class="log-teal-btn">
            RESET PASSWORD
        </button>
         
    </form>
    
    <p class="helper">Or <a href="<?php echo e(url('provider/login')); ?>">Sign in</a> with your account.</p>   
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('provider.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/provider/auth/passwords/reset.blade.php ENDPATH**/ ?>
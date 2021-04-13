<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <a class="log-blk-btn" href="<?php echo e(url('/provider/register')); ?>">CREATE NEW ACCOUNT</a>
    <h3>Sign In</h3>
</div>

<div class="col-md-12">
    <form role="form" method="POST" action="<?php echo e(url('/provider/login')); ?>">
        <?php echo e(csrf_field()); ?>


        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" autofocus>

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>

        <input id="password" type="password" class="form-control" name="password" placeholder="Password">

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>

        <div class="checkbox">           
            <input type="checkbox" name="remember"><span> Remember Me</span>
            
        </div>


        <button type="submit" class="log-teal-btn">
            Login
        </button>

        <p class="helper"><a href="<?php echo e(url('/provider/password/reset')); ?>">Forgot Your Password?</a></p>   
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('provider.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/auth/login.blade.php ENDPATH**/ ?>
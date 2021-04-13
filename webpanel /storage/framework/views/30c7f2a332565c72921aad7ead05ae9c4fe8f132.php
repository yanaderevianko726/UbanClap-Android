<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <a class="log-blk-btn" href="<?php echo e(url('/provider/register')); ?>"><?php echo app('translator')->getFromJson('provider.signup.create_new_acc'); ?></a>
    <h3><?php echo app('translator')->getFromJson('provider.signup.sign_in'); ?></h3>
</div>

<div class="col-md-12">
    <form role="form" method="POST" action="<?php echo e(url('/provider/login')); ?>">
        <?php echo e(csrf_field()); ?>


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

        <div class="checkbox">
            <label>
                <input type="checkbox" class="control" name="remember"><?php echo app('translator')->getFromJson('provider.signup.remember_me'); ?>
            </label>
        </div>

        <br>

        <button type="submit" class="log-teal-btn">
            <?php echo app('translator')->getFromJson('provider.signup.login'); ?>
        </button>

        <p class="helper"><a href="<?php echo e(url('/provider/password/reset')); ?>"> <?php echo app('translator')->getFromJson('provider.signup.forgot_password'); ?></a></p>   
    </form>
    <?php if(config('constants.social_login', 0) == 1): ?>
    <div class="col-md-12">
        <a href="<?php echo e(url('provider/auth/facebook')); ?>"><button type="submit" class="log-teal-btn fb"><i class="fa fa-facebook"></i><?php echo app('translator')->getFromJson('provider.signup.login_facebook'); ?></button></a>
    </div>  
<!--    <div class="col-md-12">
        <a href="<?php echo e(url('provider/auth/google')); ?>"><button type="submit" class="log-teal-btn gp"><i class="fa fa-google-plus"></i><?php echo app('translator')->getFromJson('provider.signup.login_google'); ?></button></a>
    </div>-->
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('provider.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/provider/auth/login.blade.php ENDPATH**/ ?>
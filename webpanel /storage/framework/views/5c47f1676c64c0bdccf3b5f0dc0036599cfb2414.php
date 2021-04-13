<?php $__env->startSection('content'); ?>

<section class="hero is-info is-fullheight">
    <div class="log-overlay"></div>
    <div class="full-page-bg-inner">
        <div class="columns no-margin">
            <div class="col-md-6 log-left">
                <span class="login-logo"><img src="<?php echo e(Setting::get('site_logo',asset('asset/img/logo.png'))); ?>"></span>
                <h2>Create your account and get moving in minutes</h2>
                <p>Welcome to <?php echo e(Setting::get('site_title','Tranxit')); ?>, the easiest way to get around at the tap of a button.</p>
            </div>
            <div class="col-md-6 log-right">
                <div class="login-box-outer">
                <div class="login-box row no-margin">
                    
                    <div class="col-md-12">
                        <a class="log-blk-btn" href="<?php echo e(url('register')); ?>">CREATE NEW ACCOUNT</a>
                        <h3>Sign In</h3>
                    </div>
                    <form  role="form" method="POST" action="<?php echo e(url('/login')); ?>"> 
                    <?php echo e(csrf_field()); ?>                      
                        <div class="col-md-12">
                             <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-12">
                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>><span> Remember Me</span>
                        </div>
                       
                        <div class="col-md-12">
                            <button type="submit" class="log-teal-btn">LOGIN</button>
                        </div>
                    </form>     

                    <div class="col-md-12">
                        <p class="helper"> <a href="<?php echo e(url('/password/reset')); ?>">Forgot Password</a></p>   
                    </div>
                </div>


                <div class="log-copy"><p class="no-margin">&copy; <?php echo e(date('Y')); ?> <?php echo e(Setting::get('site_title')); ?></p></div></div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/auth/login.blade.php ENDPATH**/ ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" type="text/css" href="../css/login.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="<?php echo e(asset('asset/img/destination.png')); ?>">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="<?php echo e(url('login')); ?>">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>User</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="<?php echo e(url('/provider/login')); ?>">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Partner</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
            </div>

            <div class="hero-body" style="background-image: url(<?php echo e(asset('asset/img/login-user-bg.jpg')); ?>);">
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <h1 class="title">
                            Get service on door step
                        </h1>
                        <h2 class="subtitle">
                            
                        </h2>
                        <div class="box">
                            <figure class="avatar">
                                <img src="https://placehold.it/128x128"><img src="<?php echo e(config('constants.site_logo', asset('logo-black.png'))); ?>">
                            </figure>
                            <form  method="POST" action="<?php echo e(url('/login')); ?>"> 
                                <?php echo e(csrf_field()); ?>

                                <div class="field">
                                    class="input"
                                        <input class="input is-large" type="email" name="email" id="email" placeholder="Your Email" autofocus="">
                                    </div>
                                    <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                                </div>
    
                                <div class="field">
                                    class="input"
                                        <input class="input is-large" type="password" name="password" id="password" placeholder="Your Password">
                                    </div>
                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" class="control" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> >
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="button is-block is-info is-large is-fullwidth">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="log-copy"><p class="no-margin"><?php echo e(config('constants.site_copyright', '&copy; '.date('Y').' Thinkin Dragon')); ?></p></div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

    

<?php echo $__env->make('user.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/auth/login.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="<?php echo e(config('constants.site_logo')); ?>">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            
                        </div>
                    </div>
                </div>
            </nav>
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns  is-3">
                        <div class="column is-8">

                        </div>
                        <div class="column box">
                            <div class="level">
                                    <div class="column left">
                                        <img src="<?php echo e(asset('asset/img/ride-form-icon.png')); ?>">
                                    </div>
                                    <div class="right">
                                        <a href="<?php echo e(url('register')); ?>">
                                            <h3>Get a <?php echo app('translator')->getFromJson('admin.service.home'); ?></h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                                    
                                    <div class="column left">
                                        <img src="<?php echo e(asset('asset/img/ride-form-icon.png')); ?>">
                                    </div>
                                    <div class="right">
                                        <a href="<?php echo e(url('/provider/register')); ?>">
                                            <h3>Provide a <?php echo app('translator')->getFromJson('admin.service.home'); ?></h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                            </div>
                                <p class="note-or">Or <a href="<?php echo e(url('/provider/login')); ?>">sign in</a> with your <?php echo app('translator')->getFromJson('admin.provider'); ?> account.</p>
                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<header>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(url('/provider')); ?>"><img src="<?php echo e(config('constants.site_logo', asset('logo-black.png'))); ?>"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="<?php echo e(url('help')); ?>"><?php echo app('translator')->getFromJson('provider.profile.help'); ?></a></li> -->
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(Auth::guard('provider')->user()->first_name); ?> <?php echo e(Auth::guard('provider')->user()->last_name); ?>

                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="row no-margin">
                                <div class="column is-4  is-text-center">
                                    <a href="#" class="new-pro-img bg-img" style="background-image: url(<?php echo e(Auth::guard('provider')->user()->avatar ? asset('storage/'.Auth::guard('provider')->user()->avatar) : asset('asset/img/provider.jpg')); ?>);">
                                    </a>
                                </div>
                                <div class="column is-8">
                                    <h6 class="new-pro-name">
                                        <?php echo e(Auth::guard('provider')->user()->first_name); ?> <?php echo e(Auth::guard('provider')->user()->last_name); ?>

                                    </h6>
                                    <div class="rating-outer new-pro-rating">
                                        <input type="hidden" class="rating"/ value="<?php echo e(Auth::guard('provider')->user()->rating); ?>" readonly>
                                    </div>

                                    <a href="<?php echo e(route('provider.profile.index')); ?>" class="new-pro-link"><?php echo app('translator')->getFromJson('provider.profile.my_profile'); ?></a>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo e(route('provider.change.password')); ?>"><?php echo app('translator')->getFromJson('provider.profile.change_password'); ?></a></li>
                            <li>
                                <a href="<?php echo e(url('/provider/logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <?php echo app('translator')->getFromJson('provider.profile.logout'); ?>
                                </a>
                                <form id="logout-form" action="<?php echo e(url('/provider/logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/layout/partials/header.blade.php ENDPATH**/ ?>
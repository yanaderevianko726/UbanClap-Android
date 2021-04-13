<aside class="menu">
    
        <div class="hero-body">
            <div class="container">
            <?php $profile_image = img(Auth::user()->picture); ?>
        <div class="pro-img" style="background-image: url(<?php echo e($profile_image); ?>);"></div>
        <h4></h4>
        <h4></h4>
              <h1 class="title">
                <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>

              </h1>
              <?php if(!empty(Auth::user()->referral_unique_id)): ?>
              <h2 class="subtitle">
                Referral Code : <?php echo e(Auth::user()->referral_unique_id); ?>

              </h2>
              <?php endif; ?>
            </div>
          </div>
        

    <ul class="menu-list">
        <li><a href="<?php echo e(url('dashboard')); ?>"><?php echo app('translator')->getFromJson('user.dashboard'); ?></a></li>
        <li><a href="<?php echo e(url('/notifications')); ?>"><?php echo app('translator')->getFromJson('user.notifications'); ?></a></li>
        <li><a href="<?php echo e(url('trips')); ?>"><?php echo app('translator')->getFromJson('user.my_trips'); ?></a></li>
        <li><a href="<?php echo e(url('upcoming/trips')); ?>"><?php echo app('translator')->getFromJson('user.upcoming_trips'); ?></a></li>
        <li><a href="<?php echo e(url('profile')); ?>"><?php echo app('translator')->getFromJson('user.profile.profile'); ?></a></li>
        <li><a href="<?php echo e(url('change/password')); ?>"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></a></li>
        <li><a href="<?php echo e(url('/payment')); ?>"><?php echo app('translator')->getFromJson('user.payment'); ?></a></li>
    
        <li><a href="<?php echo e(url('/wallet')); ?>"><?php echo app('translator')->getFromJson('user.my_wallet'); ?> <span class="pull-right"><?php echo e(currency(Auth::user()->wallet_balance)); ?></span></a></li>
        <?php if(config('constants.referral') == 1): ?>
          <li><a href="<?php echo e(url('/referral')); ?>"><?php echo app('translator')->getFromJson('user.referral'); ?></a></li>
        <?php endif; ?>  
        <li><a href="<?php echo e(url('/logout')); ?>"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><?php echo app('translator')->getFromJson('user.profile.logout'); ?></a></li>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
    </ul>
  </aside><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/include/nav.blade.php ENDPATH**/ ?>
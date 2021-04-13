<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

      <a class="navbar-item" href="<?php echo e(url('dashboard')); ?>"><img src="<?php echo e(config('constants.site_logo')); ?>">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    </div>

    <div class="navbar-end">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>

        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="<?php echo e(url('trips')); ?>"><?php echo app('translator')->getFromJson('user.my_trips'); ?></a>
          <a class="navbar-item" href="<?php echo e(url('profile')); ?>"><?php echo app('translator')->getFromJson('user.profile.profile'); ?></a>
          <a class="navbar-item" href="<?php echo e(url('change/password')); ?>"><?php echo app('translator')->getFromJson('user.profile.change_password'); ?></a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="<?php echo e(url('/logout')); ?>"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><?php echo app('translator')->getFromJson('user.profile.logout'); ?></a>
          <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
              <?php echo e(csrf_field()); ?>

          </form>
          
        </div>
      </div>
    </div>
  </div>
</nav>

                          <?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/user/include/header.blade.php ENDPATH**/ ?>
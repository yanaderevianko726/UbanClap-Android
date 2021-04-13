<nav class="navbar is-fixed-top box-shadow-y">
  <div class="navbar-brand">
    <a
      role="button"
      class="navbar-burger toggler"
      aria-label="menu"
      aria-expanded="false"
    >
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    <a class="navbar-item" href="<?php echo e(url('admin/dashboard')); ?>"><img src="<?php echo e(config('constants.site_logo')); ?>">
      <?php echo e(config('constants.site_title', 'Thinkin Service')); ?>

    </a>
    <a
      role="button"
      class="navbar-burger nav-toggler"
      aria-label="menu"
      aria-expanded="false"
    >
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div class="navbar-menu has-background-white">
    <div class="navbar-start">

    </div>
    <div class="navbar-end">
      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <figure class="image is-32x32" style="margin-right:.5em;">
            <img src="<?php echo e(img(Auth::user()->picture)); ?>">
          </figure>
          <?php echo e(Auth::user()->name); ?>

        </a>

        <div class="navbar-dropdown">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-settings')): ?>
          <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">
              <i class="ti-user mr-0-5"></i> <?php echo app('translator')->getFromJson('admin.include.profile'); ?>
          </a>
          <?php endif; ?>
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('change-password')): ?>		
          <a class="dropdown-item" href="<?php echo e(route('admin.password')); ?>">
              <i class="ti-settings mr-0-5"></i> <?php echo app('translator')->getFromJson('admin.account.change_password'); ?>
          </a>
          <?php endif; ?>
          <hr class="navbar-divider">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('help')): ?>
          <a class="dropdown-item" href="<?php echo e(route('admin.help')); ?>"><i class="ti-help mr-0-5"></i>
              <?php echo app('translator')->getFromJson('admin.help'); ?></a>
          <?php endif; ?> 
          <a class="dropdown-item" href="<?php echo e(url('/admin/logout')); ?>"
             onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="ti-power-off mr-0-5"></i> <?php echo app('translator')->getFromJson('admin.include.sign_out'); ?></a>
          
        </div>
      </div>
    </div>
  </div>
</nav><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/admin/include/header.blade.php ENDPATH**/ ?>
<?php $__env->startSection('styles'); ?>
    <style>
        img {
            filter: invert(100%);
   -webkit-filter: invert(1);
   filter: invert(1);
   }
    </style>
<?php $__env->stopSection(); ?>
      <div>
        <div class="menu-container px-1 has-background-white">
          <div class="menu-wrapper py-1">
            <aside class="menu ">
              <p class="menu-label has-text-lighter">General</p>
              <ul class="menu-list">
                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN|ACCOUNT')): ?>
                <li class="<?php echo e(Request::segment(2) === 'dashboard' ? 'is-active has-background-primary' : null); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
                        <i class="fa fa-tachometer"></i>
                        <?php echo app('translator')->getFromJson('admin.include.dashboard'); ?>
                    </a>
                </li>
                <?php endif; ?>
              </ul>
                <ul class="menu-list">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-list')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'disputeusers' ? ' has-background-primary' : null); ?> <?php echo e(Request::segment(2) === 'dispute' ? ' has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span><i class="ti-write" aria-hidden="true"></i>
                            <?php echo app('translator')->getFromJson('admin.include.dispute_panel'); ?></span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                <li><a href="<?php echo e(route('admin.dispute.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.dispute_type'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.userdisputes')); ?>"><?php echo app('translator')->getFromJson('admin.include.dispute_request'); ?></a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>	
                </li>
                <?php endif; ?>
            
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('heat-map')): ?>
                <li>
                    <a href="<?php echo e(route('admin.map.index')); ?>" class="<?php echo e(Request::segment(2) === 'map' ? 'is-active has-background-primary' : null); ?> has-text-black">
                            <i class="ti-map-alt"></i>
                            <?php echo app('translator')->getFromJson('admin.include.map'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.heatmap')); ?>" class="<?php echo e(Request::segment(2) === 'heatmap' ? 'is-active has-background-primary' : null); ?> has-text-black">
                        <i class="ti-map"></i>
                        <?php echo app('translator')->getFromJson('admin.include.heat_map'); ?>
                    </a>
                </li>
                <?php endif; ?>
                

                
                
                

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-list')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'service' ? 'has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fas fa-tools"></i>
                        <?php echo app('translator')->getFromJson('admin.include.service_types'); ?>
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-list')): ?><li><a href="<?php echo e(route('admin.service.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_service_types'); ?></a></li><?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peak-hour-list')): ?><li><a href="<?php echo e(route('admin.peakhour.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.peakhour'); ?></a></li><?php endif; ?>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-list')): ?>
                <li>
                    <a class="has-text-black <?php echo e(Request::segment(2) === 'document' ? 'is-active has-background-primary' : null); ?>" href="<?php echo e(route('admin.document.index')); ?>">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.list_documents'); ?>
                    </a>
                </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-list')): ?>
                <li>
                    <a class="has-text-black <?php echo e(Request::segment(2) === 'notification' ? 'is-active has-background-primary' : null); ?>" href="<?php echo e(route('admin.notification.index')); ?>">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.notify'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-list')): ?>
                <li>
                    <a class="has-text-black <?php echo e(Request::segment(2) === 'reason' ? 'is-active has-background-primary' : null); ?>" href="<?php echo e(route('admin.reason.index')); ?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.reason'); ?>
                    </a>
                </li>
                <?php endif; ?>
                 <li>
                    <a class="has-text-black <?php echo e(Request::segment(2) === 'banner' ? 'is-active has-background-primary' : null); ?>" href="<?php echo e(route('admin.banner.index')); ?>">
                        <i class="fa fa-image" aria-hidden="true"></i>
                        Banner
                    </a>
                </li> 
                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>	
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.members'); ?></li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'sub-admins' ? ' has-background-primary' : null); ?> <?php echo e(Request::segment(2) === 'role' ? 'has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.roles'); ?>
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?><li><a href="<?php echo e(route('admin.role.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.role_types'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sub-admin-list')): ?><li><a href="<?php echo e(route('admin.sub-admins.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.sub_admins'); ?></a></li><?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                <li>
                    <a href="<?php echo e(route('admin.user.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'user' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.users'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-list')): ?>
                <li>
                    <a href="<?php echo e(route('admin.provider.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'provider' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.providers'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispatcher-list')): ?>
                <li>
                    <a href="<?php echo e(route('admin.dispatch-manager.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'dispatch-manager' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.dispatcher'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-manager-list')): ?>
                <li>
                    <a href="<?php echo e(route('admin.account-manager.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'account-manager' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/account.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.account_manager'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-manager-list')): ?>
                <li>
                    <a href="<?php echo e(route('admin.dispute-manager.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'dispute-manager' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/account.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.dispute_manager'); ?>
                    </a>
                </li>
                <?php endif; ?>


                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.accounts'); ?></li>
                <?php endif; ?>	
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('statements')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'statement' ? 'has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-book" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.statements'); ?>
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                <li><a href="<?php echo e(route('admin.ride.statement')); ?>"><?php echo app('translator')->getFromJson('admin.include.overall_ride_statments'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.ride.statement.provider')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_statement'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.ride.statement.user')); ?>"><?php echo app('translator')->getFromJson('admin.include.user_statement'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.ride.statement.today')); ?>"><?php echo app('translator')->getFromJson('admin.include.daily_statement'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.ride.statement.monthly')); ?>"><?php echo app('translator')->getFromJson('admin.include.monthly_statement'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.ride.statement.yearly')); ?>"><?php echo app('translator')->getFromJson('admin.include.yearly_statement'); ?></a></li> 
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settlements')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'transfer' ? 'has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <?php echo app('translator')->getFromJson('admin.include.transaction'); ?>
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                <li><a href="<?php echo e(route('admin.providertransfer')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_request'); ?></a></li>
                                <li><a href="<?php echo e(route('admin.transactions')); ?>"><?php echo app('translator')->getFromJson('admin.include.all_transaction'); ?></a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.details'); ?></li>
                <?php endif; ?>	
                  

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ratings')): ?>
                <div class="dropdown is-hoverable <?php echo e(Request::segment(2) === 'review' ? 'has-background-primary' : null); ?>">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.ratings'); ?> &amp; <?php echo app('translator')->getFromJson('admin.include.reviews'); ?>
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                <li><a href="<?php echo e(route('admin.user.review')); ?>"><?php echo app('translator')->getFromJson('admin.include.user_ratings'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.provider.review')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_ratings'); ?></a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.rides'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ride-history')): ?>
                <li>
                    <a href="<?php echo e(route('admin.requests.index')); ?>" class="has-text-black">
                        <i class="fa fa-history" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.ride_history'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <!--            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('schedule-rides')): ?>
                            <li>
                                <a href="<?php echo e(route('admin.requests.scheduled')); ?>" class="has-text-black">
                                    <i class="ti-palette"></i>
                                    <?php echo app('translator')->getFromJson('admin.include.scheduled_rides'); ?>
                                </a>
                            </li>
                            <?php endif; ?>-->

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.offer'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-list')): ?>
                
                <li>
                    <a href="<?php echo e(route('admin.promocode.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'promocode' ? ' is-active has-background-primary' : null); ?>">
                        <i class="ti-layout-tab"></i>
                        <?php echo app('translator')->getFromJson('admin.include.promocodes'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.payment_details'); ?></li>
                <?php endif; ?>
                 <li>
                    <a href="<?php echo e(route('admin.stripe.index')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'stripe' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        Subscription Plans
                    </a>
                </li> 
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-history')): ?>
                <li>
                    <a href="<?php echo e(route('admin.payment')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'payment' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.payment_history'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.settings.payment')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'settings' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/credit-card.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.payment_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.settings'); ?></li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('site-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.settings')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'site' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/repairing-service.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.site_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.others'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cms-pages')): ?>
                <li>
                    <a href="<?php echo e(route('admin.cmspages')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'pages' ? ' is-active has-background-primary' : null); ?>">
                        <i class="ti-file"></i>
                        <?php echo app('translator')->getFromJson('admin.include.cms_pages'); ?>
                    </a>
                </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('custom-push')): ?>
                <li>
                    <a href="<?php echo e(route('admin.push')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'send' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/push-icon.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.custom_push'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.account'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.profile')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'profile' ? ' is-active has-background-primary' : null); ?>">
                        <img src="<?php echo e(asset('asset/img/manager.png')); ?>" style="filter: invert(100%);">
                        <?php echo app('translator')->getFromJson('admin.include.account_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('change-password')): ?>
                <li>
                    <a href="<?php echo e(route('admin.password')); ?>" class="has-text-black <?php echo e(Request::segment(2) === 'password' ? ' is-active has-background-primary' : null); ?>">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.change_password'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <li >
                    <a href="<?php echo e(url('/admin/logout')); ?>"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i>
                        <?php echo app('translator')->getFromJson('admin.include.logout'); ?>
                    </a>

                    <form id="logout-form" action="<?php echo e(url('/admin/logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>

              </ul>

            </aside>
          </div>
        </div>
      </div>

               

                
            </ul>
        </div>
    </div>
</div>
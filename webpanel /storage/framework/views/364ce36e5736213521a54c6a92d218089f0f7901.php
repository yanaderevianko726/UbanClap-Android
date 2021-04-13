<?php $__env->startSection('styles'); ?>
    <style>
        img {
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-list')): ?>
                <ul class="menu-list">
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="ti-write" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.dispute_panel'); ?>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('admin.dispute.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.dispute_type'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.userdisputes')); ?>"><?php echo app('translator')->getFromJson('admin.include.dispute_request'); ?></a></li>
                    </ul>
                </li>	
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('heat-map')): ?>
                <li>
                    <a href="<?php echo e(route('admin.map.index')); ?>" class="has-text-black">
                            <i class="ti-map-alt"></i>
                            <?php echo app('translator')->getFromJson('admin.include.map'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.heatmap')); ?>" class="has-text-black">
                        <i class="ti-map"></i>
                        <?php echo app('translator')->getFromJson('admin.include.heat_map'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('god-eye')): ?>
                <li>
                    <a href="<?php echo e(route('admin.godseye')); ?>" class="has-text-black">
                        <i class="fa fa-eye"></i>
                        <?php echo app('translator')->getFromJson('admin.heatmap.godseye'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.general'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <img src="<?php echo e(asset('asset/img/support-service.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.service_types'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-list')): ?><li><a href="<?php echo e(route('admin.service.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_service_types'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-types-create')): ?><li><a href="<?php echo e(route('admin.service.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_service_type'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peak-hour-list')): ?><li><a href="<?php echo e(route('admin.peakhour.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.peakhour'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.documents'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-list')): ?><li><a href="<?php echo e(route('admin.document.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_documents'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('documents-create')): ?><li><a href="<?php echo e(route('admin.document.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_document'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.notify'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-list')): ?><li><a href="<?php echo e(route('admin.notification.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_notifications'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-create')): ?><li><a href="<?php echo e(route('admin.notification.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_notification'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.reason'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-list')): ?><li><a href="<?php echo e(route('admin.reason.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_reasons'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel-reasons-create')): ?><li><a href="<?php echo e(route('admin.reason.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_reason'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>	
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.members'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.roles'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?><li><a href="<?php echo e(route('admin.role.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.role_types'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sub-admin-list')): ?><li><a href="<?php echo e(route('admin.sub-admins.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.sub_admins'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.users'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?><li><a href="<?php echo e(route('admin.user.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_users'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?><li><a href="<?php echo e(route('admin.user.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_user'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.providers'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-list')): ?><li><a href="<?php echo e(route('admin.provider.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_providers'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('provider-create')): ?><li><a href="<?php echo e(route('admin.provider.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_provider'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispatcher-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.dispatcher'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispatcher-list')): ?><li><a href="<?php echo e(route('admin.dispatch-manager.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_dispatcher'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispatcher-create')): ?><li><a href="<?php echo e(route('admin.dispatch-manager.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_dispatcher'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-manager-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <img src="<?php echo e(asset('asset/img/account.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.account_manager'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-manager-list')): ?><li><a href="<?php echo e(route('admin.account-manager.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_account_managers'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-manager-create')): ?><li><a href="<?php echo e(route('admin.account-manager.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_account_manager'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-manager-list')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <img src="<?php echo e(asset('asset/img/account.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.dispute_manager'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-manager-list')): ?><li><a href="<?php echo e(route('admin.dispute-manager.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_dispute_managers'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dispute-manager-create')): ?><li><a href="<?php echo e(route('admin.dispute-manager.create')); ?>"><?php echo app('translator')->getFromJson('admin.include.add_new_dispute_manager'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>


                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.accounts'); ?></li>
                <?php endif; ?>	
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('statements')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.statements'); ?>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('admin.ride.statement')); ?>"><?php echo app('translator')->getFromJson('admin.include.overall_ride_statments'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.ride.statement.provider')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_statement'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.ride.statement.user')); ?>"><?php echo app('translator')->getFromJson('admin.include.user_statement'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.ride.statement.today')); ?>"><?php echo app('translator')->getFromJson('admin.include.daily_statement'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.ride.statement.monthly')); ?>"><?php echo app('translator')->getFromJson('admin.include.monthly_statement'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.ride.statement.yearly')); ?>"><?php echo app('translator')->getFromJson('admin.include.yearly_statement'); ?></a></li> 
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settlements')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.transaction'); ?>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('admin.providertransfer')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_request'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.transactions')); ?>"><?php echo app('translator')->getFromJson('admin.include.all_transaction'); ?></a></li>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.details'); ?></li>
                <?php endif; ?>	
                  

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ratings')): ?>
                <li>
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.ratings'); ?> &amp; <?php echo app('translator')->getFromJson('admin.include.reviews'); ?>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('admin.user.review')); ?>"><?php echo app('translator')->getFromJson('admin.include.user_ratings'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.provider.review')); ?>"><?php echo app('translator')->getFromJson('admin.include.provider_ratings'); ?></a></li>
                    </ul>
                </li>
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
                    <a href="#" class="has-text-black">
                        <span class="s-caret"><i class="fa fa-angle-down"></i>
                        <i class="ti-layout-tab"></i>
                        <?php echo app('translator')->getFromJson('admin.include.promocodes'); ?>
                    </a>
                    <ul>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-list')): ?><li><a href="<?php echo e(route('admin.promocode.index')); ?>"><?php echo app('translator')->getFromJson('admin.include.list_promocodes'); ?></a></li><?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('promocodes-create')): ?><li><a href="<?php echo e(route('admin.promocode.create')); ?>">
                                <?php echo app('translator')->getFromJson('admin.include.add_new_promocode'); ?></a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.payment_details'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-history')): ?>
                <li>
                    <a href="<?php echo e(route('admin.payment')); ?>" class="has-text-black">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <?php echo app('translator')->getFromJson('admin.include.payment_history'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.settings.payment')); ?>" class="has-text-black">
                        <img src="<?php echo e(asset('asset/img/credit-card.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.payment_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.settings'); ?></li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('site-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.settings')); ?>" class="has-text-black">
                        <img src="<?php echo e(asset('asset/img/repairing-service.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.site_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.others'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cms-pages')): ?>
                <li>
                    <a href="<?php echo e(route('admin.cmspages')); ?>" class="has-text-black">
                        <i class="ti-file"></i>
                        <?php echo app('translator')->getFromJson('admin.include.cms_pages'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('help')): ?>
                <li>
                    <a href="<?php echo e(route('admin.help')); ?>" class="has-text-black">
                        <i class="ti-help"></i>
                        <?php echo app('translator')->getFromJson('admin.include.help'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('custom-push')): ?>
                <li>
                    <a href="<?php echo e(route('admin.push')); ?>" class="has-text-black">
                        <img src="<?php echo e(asset('asset/img/push-icon.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.custom_push'); ?>
                    </a>
                </li>
                <?php endif; ?>

                <?php if(auth()->check() && auth()->user()->hasRole('ADMIN')): ?>
                <li class="menu-title"><?php echo app('translator')->getFromJson('admin.include.account'); ?></li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account-settings')): ?>
                <li>
                    <a href="<?php echo e(route('admin.profile')); ?>" class="has-text-black">
                        <img src="<?php echo e(asset('asset/img/manager.png')); ?>">
                        <?php echo app('translator')->getFromJson('admin.include.account_settings'); ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('change-password')): ?>
                <li>
                    <a href="<?php echo e(route('admin.password')); ?>" class="has-text-black">
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
</div><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin/resources/views/admin/include/nav.blade.php ENDPATH**/ ?>
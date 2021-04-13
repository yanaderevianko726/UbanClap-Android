@section('styles')
    <style>
        img {
            filter: invert(100%);
   -webkit-filter: invert(1);
   filter: invert(1);
   }
    </style>
@endsection
      <div>
        <div class="menu-container px-1 has-background-white">
          <div class="menu-wrapper py-1">
            <aside class="menu ">
              <p class="menu-label has-text-lighter">General</p>
              <ul class="menu-list">
                @role('ADMIN|ACCOUNT')
                <li class="{{ Request::segment(2) === 'dashboard' ? 'is-active has-background-primary' : null }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fa fa-tachometer"></i>
                        @lang('admin.include.dashboard')
                    </a>
                </li>
                @endrole
              </ul>
                <ul class="menu-list">
                @can('dispute-list')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'disputeusers' ? ' has-background-primary' : null }} {{ Request::segment(2) === 'dispute' ? ' has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span><i class="ti-write" aria-hidden="true"></i>
                            @lang('admin.include.dispute_panel')</span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                            <ul>
                                <li><a href="{{ route('admin.dispute.index') }}">@lang('admin.include.dispute_type')</a></li>
                                <li><a href="{{ route('admin.userdisputes') }}">@lang('admin.include.dispute_request')</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>	
                </li>
                @endcan
            
                @can('heat-map')
                <li>
                    <a href="{{ route('admin.map.index') }}" class="{{ Request::segment(2) === 'map' ? 'is-active has-background-primary' : null }} has-text-black">
                            <i class="ti-map-alt"></i>
                            @lang('admin.include.map')
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.heatmap') }}" class="{{ Request::segment(2) === 'heatmap' ? 'is-active has-background-primary' : null }} has-text-black">
                        <i class="ti-map"></i>
                        @lang('admin.include.heat_map')
                    </a>
                </li>
                @endcan
                {{-- @can('god-eye')
                <li>
                    <a href="{{ route('admin.godseye') }}" class="has-text-black">
                        <i class="fa fa-eye"></i>
                        @lang('admin.heatmap.godseye')
                    </a>
                </li>
                @endcan --}}

                {{-- @role('ADMIN') --}}
                {{--  <li class="menu-title">@lang('admin.include.general')</li>  --}}
                {{-- @endrole --}}

                @can('service-types-list')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'service' ? 'has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fas fa-tools"></i>
                        @lang('admin.include.service_types')
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
                                    @can('service-types-list')<li><a href="{{ route('admin.service.index') }}">@lang('admin.include.list_service_types')</a></li>@endcan
                                    @can('peak-hour-list')<li><a href="{{ route('admin.peakhour.index') }}">@lang('admin.include.peakhour')</a></li>@endcan
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                @endcan
                @can('documents-list')
                <li>
                    <a class="has-text-black {{ Request::segment(2) === 'document' ? 'is-active has-background-primary' : null }}" href="{{ route('admin.document.index') }}">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        @lang('admin.include.list_documents')
                    </a>
                </li>
                @endcan
                
                @can('notification-list')
                <li>
                    <a class="has-text-black {{ Request::segment(2) === 'notification' ? 'is-active has-background-primary' : null }}" href="{{ route('admin.notification.index') }}">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        @lang('admin.include.notify')
                    </a>
                </li>
                @endcan
                @can('cancel-reasons-list')
                <li>
                    <a class="has-text-black {{ Request::segment(2) === 'reason' ? 'is-active has-background-primary' : null }}" href="{{ route('admin.reason.index') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        @lang('admin.include.reason')
                    </a>
                </li>
                @endcan
                 <li>
                    <a class="has-text-black {{ Request::segment(2) === 'banner' ? 'is-active has-background-primary' : null }}" href="{{ route('admin.banner.index') }}">
                        <i class="fa fa-image" aria-hidden="true"></i>
                        Banner
                    </a>
                </li> 
                @role('ADMIN')	
                <li class="menu-title">@lang('admin.include.members')</li>
                @can('role-list')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'sub-admins' ? ' has-background-primary' : null }} {{ Request::segment(2) === 'role' ? 'has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        @lang('admin.include.roles')
                        </span>
                        <span class="icon is-small">
                          <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                      <div class="dropdown-content">
                        <div class="dropdown-item">
                        @can('role-list')<li><a href="{{ route('admin.role.index') }}">@lang('admin.include.role_types')</a></li>@endcan
                        @can('sub-admin-list')<li><a href="{{ route('admin.sub-admins.index') }}">@lang('admin.include.sub_admins')</a></li>@endcan
                        </div>
                      </div>
                    </div>
                  </div>
                @endcan
                @endrole
                @can('user-list')
                <li>
                    <a href="{{ route('admin.user.index') }}" class="has-text-black {{ Request::segment(2) === 'user' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        @lang('admin.include.users')
                    </a>
                </li>
                @endcan

                @can('provider-list')
                <li>
                    <a href="{{ route('admin.provider.index') }}" class="has-text-black {{ Request::segment(2) === 'provider' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        @lang('admin.include.providers')
                    </a>
                </li>
                @endcan

                @can('dispatcher-list')
                <li>
                    <a href="{{ route('admin.dispatch-manager.index') }}" class="has-text-black {{ Request::segment(2) === 'dispatch-manager' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                        @lang('admin.include.dispatcher')
                    </a>
                </li>
                @endcan

                @can('account-manager-list')
                <li>
                    <a href="{{ route('admin.account-manager.index') }}" class="has-text-black {{ Request::segment(2) === 'account-manager' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/account.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.account_manager')
                    </a>
                </li>
                @endcan
                @can('dispute-manager-list')
                <li>
                    <a href="{{ route('admin.dispute-manager.index') }}" class="has-text-black {{ Request::segment(2) === 'dispute-manager' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/account.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.dispute_manager')
                    </a>
                </li>
                @endcan


                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.accounts')</li>
                @endrole	
                @can('statements')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'statement' ? 'has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-book" aria-hidden="true"></i>
                        @lang('admin.include.statements')
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
                                <li><a href="{{ route('admin.ride.statement') }}">@lang('admin.include.overall_ride_statments')</a></li>
                                <li><a href="{{ route('admin.ride.statement.provider') }}">@lang('admin.include.provider_statement')</a></li>
                                <li><a href="{{ route('admin.ride.statement.user') }}">@lang('admin.include.user_statement')</a></li>
                                <li><a href="{{ route('admin.ride.statement.today') }}">@lang('admin.include.daily_statement')</a></li>
                                <li><a href="{{ route('admin.ride.statement.monthly') }}">@lang('admin.include.monthly_statement')</a></li>
                                <li><a href="{{ route('admin.ride.statement.yearly') }}">@lang('admin.include.yearly_statement')</a></li> 
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                @endcan
                @can('settlements')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'transfer' ? 'has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            @lang('admin.include.transaction')
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
                                <li><a href="{{ route('admin.providertransfer') }}">@lang('admin.include.provider_request')</a></li>
                                <li><a href="{{ route('admin.transactions') }}">@lang('admin.include.all_transaction')</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                @endcan

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.details')</li>
                @endrole	
                  

                @can('ratings')
                <div class="dropdown is-hoverable {{ Request::segment(2) === 'review' ? 'has-background-primary' : null }}">
                    <div class="dropdown-trigger">
                      <a aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        @lang('admin.include.ratings') &amp; @lang('admin.include.reviews')
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
                                <li><a href="{{ route('admin.user.review') }}">@lang('admin.include.user_ratings')</a></li>
                        <li><a href="{{ route('admin.provider.review') }}">@lang('admin.include.provider_ratings')</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                @endcan

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.rides')</li>
                @endrole

                @can('ride-history')
                <li>
                    <a href="{{ route('admin.requests.index') }}" class="has-text-black">
                        <i class="fa fa-history" aria-hidden="true"></i>
                        @lang('admin.include.ride_history')
                    </a>
                </li>
                @endcan
                {{--           @can('schedule-rides')
                            <li>
                                <a href="{{ route('admin.requests.scheduled') }}" class="has-text-black">
                                    <i class="ti-palette"></i>
                                    @lang('admin.include.scheduled_rides')
                                </a>
                            </li>
                            @endcan --}}

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.offer')</li>
                @endrole

                @can('promocodes-list')
                
                <li>
                    <a href="{{ route('admin.promocode.index') }}" class="has-text-black {{ Request::segment(2) === 'promocode' ? ' is-active has-background-primary' : null }}">
                        <i class="ti-layout-tab"></i>
                        @lang('admin.include.promocodes')
                    </a>
                </li>
                @endcan

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.payment_details')</li>
                @endrole
                 <li>
                    <a href="{{ route('admin.stripe.index') }}" class="has-text-black {{ Request::segment(2) === 'stripe' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        Subscription Plans
                    </a>
                </li> 
                @can('payment-history')
                <li>
                    <a href="{{ route('admin.payment') }}" class="has-text-black {{ Request::segment(2) === 'payment' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        @lang('admin.include.payment_history')
                    </a>
                </li>
                @endcan
                @can('payment-settings')
                <li>
                    <a href="{{ route('admin.settings.payment') }}" class="has-text-black {{ Request::segment(2) === 'settings' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/credit-card.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.payment_settings')
                    </a>
                </li>
                @endcan

                <li class="menu-title">@lang('admin.include.settings')</li>
                @can('site-settings')
                <li>
                    <a href="{{ route('admin.settings') }}" class="has-text-black {{ Request::segment(2) === 'site' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/repairing-service.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.site_settings')
                    </a>
                </li>
                @endcan

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.others')</li>
                @endrole

                @can('cms-pages')
                <li>
                    <a href="{{ route('admin.cmspages') }}" class="has-text-black {{ Request::segment(2) === 'pages' ? ' is-active has-background-primary' : null }}">
                        <i class="ti-file"></i>
                        @lang('admin.include.cms_pages')
                    </a>
                </li>
                @endcan
                {{--  @can('help')
                <li>
                    <a href="{{ route('admin.help') }}" class="has-text-black">
                        <i class="ti-help"></i>
                        @lang('admin.include.help')
                    </a>
                </li>
                @endcan  --}}
                @can('custom-push')
                <li>
                    <a href="{{ route('admin.push') }}" class="has-text-black {{ Request::segment(2) === 'send' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/push-icon.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.custom_push')
                    </a>
                </li>
                @endcan

                @role('ADMIN')
                <li class="menu-title">@lang('admin.include.account')</li>
                @endrole

                @can('account-settings')
                <li>
                    <a href="{{ route('admin.profile') }}" class="has-text-black {{ Request::segment(2) === 'profile' ? ' is-active has-background-primary' : null }}">
                        <img src="{{asset('asset/img/manager.png')}}" style="filter: invert(100%);">
                        @lang('admin.include.account_settings')
                    </a>
                </li>
                @endcan
                @can('change-password')
                <li>
                    <a href="{{ route('admin.password') }}" class="has-text-black {{ Request::segment(2) === 'password' ? ' is-active has-background-primary' : null }}">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        @lang('admin.include.change_password')
                    </a>
                </li>
                @endcan
                <li >
                    <a href="{{ url('/admin/logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i>
                        @lang('admin.include.logout')
                    </a>

                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
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
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
    <a class="navbar-item" href="{{url('admin/dashboard')}}"><img src="{{config('constants.site_logo')}}">
      {{ config('constants.site_title', 'Thinkin Service')  }}
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
            <img src="{{img(Auth::user()->picture)}}">
          </figure>
          {{Auth::user()->name}}
        </a>

        <div class="navbar-dropdown">
          @can('account-settings')
          <a class="dropdown-item" href="{{route('admin.profile')}}">
              <i class="ti-user mr-0-5"></i> @lang('admin.include.profile')
          </a>
          @endcan
          @can('change-password')		
          <a class="dropdown-item" href="{{route('admin.password')}}">
              <i class="ti-settings mr-0-5"></i> @lang('admin.account.change_password')
          </a>
          @endcan
          <hr class="navbar-divider">
          @can('help')
          <a class="dropdown-item" href="{{route('admin.help')}}"><i class="ti-help mr-0-5"></i>
              @lang('admin.help')</a>
          @endcan 
          <a class="dropdown-item" href="{{ url('/admin/logout') }}"
             onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="ti-power-off mr-0-5"></i> @lang('admin.include.sign_out')</a>
          
        </div>
      </div>
    </div>
  </div>
</nav>
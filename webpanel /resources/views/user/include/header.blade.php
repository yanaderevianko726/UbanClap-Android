<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

      <a class="navbar-item" href="{{url('dashboard')}}"><img src="{{config('constants.site_logo')}}">
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
          {{Auth::user()->first_name}} {{Auth::user()->last_name}}
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="{{url('trips')}}">@lang('user.my_trips')</a>
          <a class="navbar-item" href="{{url('profile')}}">@lang('user.profile.profile')</a>
          <a class="navbar-item" href="{{url('change/password')}}">@lang('user.profile.change_password')</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="{{ url('/logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">@lang('user.profile.logout')</a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          
        </div>
      </div>
    </div>
  </div>
</nav>

                          
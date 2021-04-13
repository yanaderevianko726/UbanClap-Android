<aside class="menu">
    
        <div class="hero-body">
            <div class="container">
            <?php $profile_image = img(Auth::user()->picture); ?>
        <div class="pro-img" style="background-image: url({{$profile_image}});"></div>
        <h4></h4>
        <h4></h4>
              <h1 class="title">
                {{Auth::user()->first_name}} {{Auth::user()->last_name}}
              </h1>
              @if(!empty(Auth::user()->referral_unique_id))
              <h2 class="subtitle">
                Referral Code : {{Auth::user()->referral_unique_id}}
              </h2>
              @endif
            </div>
          </div>
        

    <ul class="menu-list">
        <li><a href="{{url('dashboard')}}">@lang('user.dashboard')</a></li>
        <li><a href="{{ url('/notifications') }}">@lang('user.notifications')</a></li>
        <li><a href="{{url('trips')}}">@lang('user.my_trips')</a></li>
        <li><a href="{{url('upcoming/trips')}}">@lang('user.upcoming_trips')</a></li>
        <li><a href="{{url('profile')}}">@lang('user.profile.profile')</a></li>
        <li><a href="{{url('change/password')}}">@lang('user.profile.change_password')</a></li>
        <li><a href="{{url('/payment')}}">@lang('user.payment')</a></li>
    
        <li><a href="{{url('/wallet')}}">@lang('user.my_wallet') <span class="pull-right">{{currency(Auth::user()->wallet_balance)}}</span></a></li>
        @if(config('constants.referral') == 1)
          <li><a href="{{url('/referral')}}">@lang('user.referral')</a></li>
        @endif  
        <li><a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">@lang('user.profile.logout')</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
    </ul>
  </aside>
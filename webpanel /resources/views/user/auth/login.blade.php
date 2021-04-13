@extends('user.layout.auth')

@section('content')

<section class="hero is-info is-fullheight">
    <div class="log-overlay"></div>
    <div class="full-page-bg-inner">
        <div class="columns no-margin">
            <div class="col-md-6 log-left">
                <span class="login-logo"><img src="{{ Setting::get('site_logo',asset('asset/img/logo.png'))}}"></span>
                <h2>Create your account and get moving in minutes</h2>
                <p>Welcome to {{Setting::get('site_title','Thinkin Service')}}, the easiest way to get around at the tap of a button.</p>
            </div>
            <div class="col-md-6 log-right">
                <div class="login-box-outer">
                <div class="login-box row no-margin">
                    
                    <div class="col-md-12">
                        <a class="log-blk-btn" href="{{url('register')}}">CREATE NEW ACCOUNT</a>
                        <h3>Sign In</h3>
                    </div>
                    <form  role="form" method="POST" action="{{ url('/login') }}"> 
                    {{ csrf_field() }}                      
                        <div class="col-md-12">
                             <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}><span> Remember Me</span>
                        </div>
                       
                        <div class="col-md-12">
                            <button type="submit" class="log-teal-btn">LOGIN</button>
                        </div>
                    </form>     

                    <div class="col-md-12">
                        <p class="helper"> <a href="{{ url('/password/reset') }}">Forgot Password</a></p>   
                    </div>
                </div>


                <div class="log-copy"><p class="no-margin">&copy; {{date('Y')}} {{Setting::get('site_title')}}</p></div></div>
            </div>
        </div>
    </div>
</section>
@endsection
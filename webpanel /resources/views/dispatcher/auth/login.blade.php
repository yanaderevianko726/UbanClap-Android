@extends('dispatcher.layout.auth')

@section('content')
<div class="sign-form">
    <div class="columns">
        <div class="column">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5>Dispatcher Login</h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="{{ url('/dispatcher/login') }}" >
                {{ csrf_field() }}
                    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" required="true" class="input" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" required="true" class="input" id="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="px-2 form-group mb-0">
                        <input type="checkbox" class="control" name="remember"> Remember Me
                    </div>
                    <br>
                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase">Sign in</button>
                    </div>
                </form>
                <div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="{{ url('/dispatcher/password/reset') }}"><span class="underline">Forgot Your Password?</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

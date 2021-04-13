@extends('admin.layout.auth')

@section('content')
<div class="sign-form">
    <div class="columns">
        <div class="column">
            <div class="box b-a-0">
                <div class="p-2 text-xs-center">
                    <h5>Reset Password</h5>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="{{ url('/admin/password/reset') }}" >
                
                {{ csrf_field() }}
                
                <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" value="{{ $email or old('email') }}" autofocus required="true" class="input" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" required="true" class="input" id="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" name="password_confirmation" required="true" class="input" id="password_confirmation" placeholder="Password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="px-2 form-group mb-0">
                        <button type="submit" class="button is-primary is-uppercase">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

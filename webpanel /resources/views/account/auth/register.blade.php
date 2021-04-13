@extends('account.layout.auth')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form  role="form" method="POST" action="{{ url('/account/register') }}">
                        {{ csrf_field() }}

                        <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="column control-label">Name</label>

                            <div class="column">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="column control-label">E-Mail Address</label>

                            <div class="column">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="column control-label">Password</label>

                            <div class="column">
                                <input id="password" type="password" class="input" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="column control-label">Confirm Password</label>

                            <div class="column">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="column">
                                <button type="submit" class="button is-link">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

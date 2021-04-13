@extends('user.layout.base')

@section('title', 'Change Password ')

@section('content')
<section class="hero is-info welcome is-small">
    
    <div class="hero-body">
        <div class="container">
            <h4 class="title">@lang('user.profile.change_password')</h4>
            <h4 class="subtitle">
                Keep password strong to secure personal info
            </h4>
        
            <div class="container box">
        <div class="columns">
        @if(config('constants.demo_mode', 0) == 1)
            <div class="alert alert-danger">
                 @lang('admin.demomode')
            </div>
        @else
            @include('common.notify')
        @endif
        
            <form action="{{url('change/password')}}" method="post">
            {{ csrf_field() }}
                <div class="column">
                    <div class="field">
                        <label>@lang('user.profile.old_password')</label>

                            <div class="control">
                        <input type="password" class="input is-info" name="old_password" class="input" placeholder="@lang('user.profile.old_password')">
                            </div>
                    </div>
                    <div class="field">
                        <label>@lang('user.profile.password')</label>
                        <div class="control">
                        <input type="password" class="input is-info" name="password" class="input" placeholder="@lang('user.profile.password')">
                    </div>
                    </div>
                    <div class="field">
                        <div class="control">
                        <label>@lang('user.profile.confirm_password')</label>
                        <input type="password" class="input is-info" name="password_confirmation" class="input" placeholder="@lang('user.profile.confirm_password')">
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-link big">@lang('user.profile.change_password')</button>
                    </div>
                </div>
            </form>
        </div>
            </div>
    </div>
</div>
  </section>

@endsection
@extends('provider.layout.app')

@section('title', 'Change Password ')

@section('content')

 <div class="profile-content gray-bg pad50">
    <div class="container">
        <div class="dash-content">
            <div class="row no-margin">
                <div class="column">
                    <h4 class="page-title">@lang('user.profile.change_password')</h4>
                </div>
            </div>
            @if(Setting::get('demo_mode', 0) == 1)
                <div class="alert alert-danger">
                     @lang('admin.demomode')
                </div>
            @else
                @include('common.notify')
            @endif
            <div class="row no-margin edit-pro">
                <form action="{{route('provider.password.update')}}" method="post">          
                {{ csrf_field() }}
                    <div class="column">
                        <div class="field">
                            <label>@lang('user.profile.old_password')</label>
                            <input type="password" name="old_password" class="input" placeholder="@lang('user.profile.old_password')">
                        </div>
                        <div class="field">
                            <label>@lang('user.profile.password')</label>
                            <input type="password" name="password" class="input" placeholder="@lang('user.profile.password')">
                        </div>

                        <div class="field">
                            <label>@lang('user.profile.confirm_password')</label>
                            <input type="password" name="password_confirmation" class="input" placeholder="@lang('user.profile.confirm_password')">
                        </div>
                      
                        <div>
                            <button type="submit" class="form-sub-btn big">@lang('user.profile.change_password')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
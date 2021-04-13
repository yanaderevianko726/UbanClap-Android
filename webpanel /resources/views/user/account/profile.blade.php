@extends('user.layout.base')

@section('title', 'Profile ')

@section('content')

<div class="column is-9">
    <div class="dash-content">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title">@lang('user.profile.general_information')</h4>
            </div>
        </div>
            @include('common.notify')
        <div class="columns no-margin">
            <form>
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.first_name')</strong></h5>
                    <p class="column no-padding">{{Auth::user()->first_name}}</p>                       
                </div>
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.last_name')</strong></h5>
                    <p class="column no-padding">{{Auth::user()->last_name}}</p>                       
                </div>
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.email')</strong></h5>
                    <p class="column no-padding">{{Auth::user()->email}}</p>
                </div>

                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.mobile')</strong></h5>
                    <p class="column no-padding">{{Auth::user()->mobile}}</p>
                </div>
               
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.wallet_balance')</strong></h5>
                    <p class="column no-padding">{{currency(Auth::user()->wallet_balance)}}</p>
                </div>                  

                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.language')</strong></h5>
                    @php($language=get_all_language())
                    <p class="column no-padding">
                        @if(!empty($language[Auth::user()->language]))
                        {{$language[Auth::user()->language]}}
                        @else
                        {{$language['en']}}
                        @endif</p>
                </div>
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.country_code')</strong></h5>
                    <p class="column no-padding">{{Auth::user()->country_code}}</p>
                </div> 
                <div class="column pro-form">
                    <h5 class="column no-padding"><strong>@lang('user.profile.qr_code')</strong></h5>
                    <img src="{{asset(Auth::user()->qrcode_url)}}">
                </div>  

                <div class="column pro-form">
                    <a class="form-sub-btn" href="{{url('edit/profile')}}">@lang('user.profile.edit')</a>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
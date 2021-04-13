@extends('fleet.layout.base')

@section('title', 'Update Profile ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <h5 style="margin-bottom: 2em;">@lang('admin.account.update_profile')</h5>

            <form  action="{{route('fleet.profile.update')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}

                <div class="field">
                    <label for="name" class="label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ Auth::guard('fleet')->user()->name }}" name="name" required id="name" placeholder="@lang('admin.name')" readonly>
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="{{ isset(Auth::guard('fleet')->user()->email) ? Auth::guard('fleet')->user()->email : '' }}" id="email" placeholder="@lang('admin.email')" readonly>
                    </div>
                </div>

                <div class="field">
                    <label for="company" class="label">@lang('admin.company')</label>
                    <div class="control">
                        <input  class="input" type="text" required name="company" value="{{ isset(Auth::guard('fleet')->user()->company) ? Auth::guard('fleet')->user()->company : '' }}" id="company" placeholder="@lang('admin.company')">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="text" required name="mobile" value="{{ isset(Auth::guard('fleet')->user()->mobile) ? Auth::guard('fleet')->user()->mobile : '' }}" id="mobile" placeholder="@lang('admin.mobile')">
                    </div>
                </div>

<!--                <div class="field">
                    <label class="label">@lang('user.profile.language')</label>
                    <div class="control">
                        @php($language=get_all_language())
                        <select class="select" name="language" id="language">
                            @foreach($language as $lkey=>$lang)
                            <option value="{{$lkey}}" @if(Auth::user()->language==$lkey) selected @endif>{{$lang}}</option>
                            @endforeach
                        </select>
                    </div>    
                </div>-->

                <div class="field">
                    <label for="logo" class="label">@lang('admin.logo')</label>
                    <div class="control">
                        @if(isset(Auth::guard('fleet')->user()->logo))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{img(Auth::guard('fleet')->user()->logo)}}">
                        @endif
                        <input type="file" accept="image/*" name="logo" class=" dropify form-control-file" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.account.update_profile')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

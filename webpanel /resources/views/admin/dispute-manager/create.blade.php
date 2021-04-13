@extends('admin.layout.base')

@section('title', __('admin.dispute-manager.add_dispute_manager'))

@section('content')


<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.dispute-manager.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="column label">@lang('admin.account-manager.full_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="@lang('admin.account-manager.full_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="column label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="email" required name="email" value="{{old('email')}}" id="email" placeholder="@lang('admin.email')">
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="column label">@lang('admin.password')</label>
                    <div class="control">
                        <input  class="input" type="password" name="password" id="password" placeholder="@lang('admin.password')">
                    </div>
                </div>

                <div class="field">
                    <label for="password_confirmation" class="column label">@lang('admin.account-manager.password_confirmation')</label>
                    <div class="control">
                        <input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="@lang('admin.dispute-manager.password_confirmation')">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="column label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ old('mobile') }}" name="mobile" required id="mobile" placeholder="@lang('admin.mobile')">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.dispute-manager.add_dispute_manager')</button>
                        <a href="{{route('admin.dispute-manager.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

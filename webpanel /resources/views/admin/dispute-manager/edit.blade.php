@extends('admin.layout.base')

@section('title', __('admin.dispute-manager.update_dispute_manager'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.dispute-manager.update', $account->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label">@lang('admin.account-manager.full_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $account->name }}" name="name" required id="name" placeholder="@lang('admin.account-manager.full_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $account->email }}" name="email" required id="email" placeholder="@lang('admin.email')">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ $account->mobile }}" name="mobile" required id="mobile" placeholder="@lang('admin.mobile')">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">@lang('admin.password')</label>
                    <div class="control">
                        <input type="password" class="input" name="password" placeholder="@lang('admin.password')">
                    </div>
                </div>

                <div class="field">
                    <label class="label">@lang('admin.account-manager.password_confirmation')</label>
                    <div class="control">
                        <input type="password" class="input" name="password_confirm" placeholder="@lang('admin.account-manager.password_confirmation')">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.account-manager.update_account_manager')</button>
                        <a href="{{route('admin.dispute-manager.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

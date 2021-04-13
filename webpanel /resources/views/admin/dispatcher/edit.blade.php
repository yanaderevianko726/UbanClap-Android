@extends('admin.layout.base')

@section('title', __('admin.dispatcher.update_dispatcher'))

@section('content')


<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.dispatch-manager.update', $dispatcher->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label">@lang('admin.account-manager.full_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $dispatcher->name }}" name="name" required id="name" placeholder="Full Name">
                    </div>
                </div>

                <div class="field">
                    <label for="email" class="label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $dispatcher->email }}" readonly="true" name="email" required id="email" placeholder="Full Name">
                    </div>
                </div>

                <div class="field">
                    <label for="mobile" class="label">@lang('admin.mobile')</label>
                    <div class="control">
                        <input class="form-control numbers" type="number" value="{{ $dispatcher->mobile }}" name="mobile" required id="mobile" placeholder="Mobile">
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input type="password" class="control" name="password">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input type="password" class="control" name="password_confirm">
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.dispatcher.update_dispatcher')</button>
                        <a href="{{route('admin.dispatch-manager.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

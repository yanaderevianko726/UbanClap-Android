@extends('admin.layout.base')

@section('title', 'Add Admin ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.admins.Add_User')</h5>

            <form  action="{{route('admin.sub-admins.store')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="column label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="@lang('admin.name')">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="column label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('email') }}" name="email" required id="name" placeholder="@lang('admin.email')">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="column label">@lang('admin.password')</label>
                    <div class="control">
                        <input  class="input" type="password" value="" name="password" required id="password" placeholder="@lang('admin.password')">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="column label">@lang('admin.password_confirmation')</label>
                    <div class="control">
                        <input  class="input" type="password" value="" name="password_confirmation" required id="password_confirmation" placeholder="@lang('admin.password_confirmation')">
                    </div>
                </div>

                <div class="field">
                    <label for="permission" class="column label">@lang('admin.role')</label>
                    <div class="control">
                        @foreach($roles as $value)
                            @if($value->id>5)
                                <label><input type="checkbox" class="control" value="{{ $value->id }}" name="roles[]" id="role" />{{ $value->name }}</label>
                            @endif    
                        @endforeach
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.admins.Add_User')</button>
                        <a href="{{route('admin.sub-admins.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

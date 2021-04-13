@extends('admin.layout.base')

@section('title', 'Update User ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.admins.update_User')</h5>

            <form  action="{{route('admin.sub-admins.update', $user->id )}}" method="POST" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="field">
                    <label for="name" class="column label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $user->name }}" name="name" required id="name" placeholder="First Name">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="column label">@lang('admin.email')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $user->email }}" name="email" required id="email" placeholder="First Name">
                    </div>
                </div>


                <!-- <div class="field">
                    <label for="name" class="column label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="password" value="" name="password" id="name" placeholder="First Name">
                    </div>
                </div>
                
                <div class="field">
                    <label for="name" class="column label">@lang('admin.name')</label>
                    <div class="control">
                        <input  class="input" type="password" value="" name="password_confirmation" id="password_confirmation" placeholder="First Name">
                    </div>
                </div> -->

                <div class="field">
                    <label for="permission" class="column label">@lang('admin.role')</label>
                    <div class="control">
                        @foreach($roles as $role)
                        <label><input type="checkbox" class="control" @php if(in_array($role->id, $userRole)) { echo 'checked'; } @endphp value="{{ $role->id }}" name="roles[]" id="roles" />
                        {{ $role->name }}</label>
                        @endforeach
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.admins.update_User')</button>
                        <a href="{{route('admin.sub-admins.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

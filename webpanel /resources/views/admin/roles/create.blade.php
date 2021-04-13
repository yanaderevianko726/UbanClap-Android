@extends('admin.layout.base')

@section('title', __('admin.roles.add_role'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.roles.add_role')</h5>

            <form  action="{{route('admin.role.store')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="column label">@lang('admin.roles.role_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="@lang('admin.name')">
                    </div>
                </div>

                <div class="field">
                    <label for="permission" class="column label">@lang('admin.permissions')</label>
                    <div class="control">
                        @php $val = ""; @endphp
                        @foreach($permissions as $value)
                        @if($value->group_name != $val) 
                        @php $val = $value->group_name; @endphp
                        <h5>{{$value->group_name}}</h5>
                        @endif
                        <label style="margin-right: 20px; margin-bottom: 20px;"><input type="checkbox" class="control" value="{{ $value->id }}" name="permission[]" id="permission" />
                        {{ $value->display_name }}</label>
                        @endforeach
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.roles.add_role')</button>
                        <a href="{{route('admin.role.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

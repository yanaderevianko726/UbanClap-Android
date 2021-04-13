@extends('account.layout.base')

@section('title', __('admin.account.change_password'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">

		<h5 style="margin-bottom: 2em;">{{__('admin.account.change_password')}}</h5>

            <form  action="{{route('account.password.update')}}" method="POST" role="form">
            	{{csrf_field()}}

            	<div class="field">
					<label for="old_password" class=" label">@lang('admin.account.old_password')</label>
					<div class="control">
						<input  class="input" type="password" name="old_password" id="old_password" placeholder="@lang('admin.account.old_password')">
					</div>
				</div>

				<div class="field">
					<label for="password" class=" label">@lang('admin.account.password')</label>
					<div class="control">
						<input  class="input" type="password" name="password" id="password" placeholder="@lang('admin.account.new_password')">
					</div>
				</div>

				<div class="field">
					<label for="password_confirmation" class=" label">@lang('admin.account.password_confirmation')</label>
					<div class="control">
						<input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="@lang('admin.account.retype_password')">
					</div>
				</div>

				<div class="field">
					<label for="zipcode" class=" label"></label>
					<div class="control">
						<button type="submit" class="button is-link">@lang('admin.account.change_password')</button>
					</div>
				</div>

			</form>
		</div>
    </div>
</div>

@endsection

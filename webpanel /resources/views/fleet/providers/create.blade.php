@extends('fleet.layout.base')

@section('title', 'Add Provider ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
            <a href="{{ route('fleet.provider.index') }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

			<h5 style="margin-bottom: 2em;">@lang('admin.provides.add_provider')</h5>

            <form  action="{{route('fleet.provider.store')}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
				<div class="field">
					<label for="first_name" class="column label">@lang('admin.first_name')</label>
					<div class="control">
						<input  class="input" type="text" value="{{ old('first_name') }}" name="first_name" required id="first_name" placeholder="@lang('admin.first_name')">
					</div>
				</div>

				<div class="field">
					<label for="last_name" class="column label">@lang('admin.last_name')</label>
					<div class="control">
						<input  class="input" type="text" value="{{ old('last_name') }}" name="last_name" required id="last_name" placeholder="@lang('admin.last_name')">
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
						<input  class="input" type="password" name="password" id="password" placeholder="@lang('admin.account.new_password')">
					</div>
				</div>

				<div class="field">
					<label for="password_confirmation" class="column label">@lang('admin.provides.password_confirmation')</label>
					<div class="control">
						<input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="@lang('admin.account.retype_password')">
					</div>
				</div>

				<div class="field">
					<label for="picture" class="column label">@lang('admin.picture')</label>
					<div class="control">
						<input type="file" accept="image/*" name="avatar" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
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
						<button type="submit" class="button is-link">@lang('admin.provides.add_provider')</button>
						<a href="{{route('fleet.provider.index')}}" class="button is-default">@lang('admin.cancel')</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection

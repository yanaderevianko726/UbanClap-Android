@extends('admin.layout.base')

@section('title', __('admin.dispute.update_dispute'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;">@lang('admin.dispute.update_dispute')</h5>

            <form  action="{{route('admin.dispute.update', $dispute->id )}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
            	<input type="hidden" name="_method" value="PATCH">				
				
				<div class="field">
					<label for="dispute_type" class="label">@lang('admin.dispute.dispute_type')</label>
					<div class="select">
						<select name="dispute_type" class="input">
							<option value="user" @if($dispute->dispute_type=='user')selected @endif>@lang('admin.user')</option>
							<option value="provider" @if($dispute->dispute_type=='provider')selected @endif>@lang('admin.provider')</option>
						</select>
					</div>
				</div>

				<div class="field">
					<label for="dispute_name" class="label">@lang('admin.dispute.dispute_name')</label>
					<div class="control">
						<input  class="input" autocomplete="off"  type="text" value="{{ $dispute->dispute_name }}" name="dispute_name" required id="dispute_name" placeholder="@lang('admin.dispute.dispute_name')">
					</div>
				</div>

				<div class="field">
					<label for="dispute_status" class="label">@lang('admin.dispute.dispute_status')</label>
					<div class="select">
						<select name="dispute_status" class="input">
							<option value="active" @if($dispute->status=='active')selected @endif>@lang('admin.active')</option>
							<option value="inactive" @if($dispute->status=='inactive')selected @endif>@lang('admin.inactive')</option>
						</select>
					</div>
				</div>

				<div class="field">
					<label for="" class="label"></label>
					<div class="control">
						<button type="submit" class="button is-link">@lang('admin.dispute.update_dispute')</button>
						<a href="{{route('admin.dispute.index')}}" class="button is-default">@lang('admin.cancel')</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection

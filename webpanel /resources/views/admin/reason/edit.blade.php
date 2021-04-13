@extends('admin.layout.base')

@section('title', __('admin.reason.update_reason'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
    	    <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

			<h5 style="margin-bottom: 2em;">@lang('admin.reason.update_reason')</h5>

            <form  action="{{route('admin.reason.update', $reason->id )}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
            	<input type="hidden" name="_method" value="PATCH">
				<div class="field">
					<label for="type" class="label">@lang('admin.reason.type')</label>
					<div class="control">
						<select class="select" name="type" id="type">
							<option value="USER" @if($reason->type=='USER')selected @endif>@lang('admin.user')</option>
							<option value="PROVIDER" @if($reason->type=='PROVIDER')selected @endif>@lang('admin.provider')</option>
						</select>
					</div>
				</div>
				
				<div class="field">
					<label for="reason" class="label">@lang('admin.reason.reason')</label>
					<div class="control">
						<input  class="input" autocomplete="off"  type="text" value="{{ $reason->reason }}" name="reason" required id="reason" placeholder="@lang('admin.reason.reason')">
					</div>
				</div>
				
				<div class="field">
					<label for="max_amount" class="label">@lang('admin.reason.status')</label>
					<div class="control">
						<select class="select" name="status" id="status">
							<option value="1" @if($reason->status==1)selected @endif>@lang('admin.active')</option>
							<option value="0" @if($reason->status==0)selected @endif>@lang('admin.inactive')</option>
						</select>
					</div>
				</div>


				
				<div class="field">
					<label for="" class="label"></label>
					<div class="control">
						<button type="submit" class="button is-link">@lang('admin.reason.update_reason')</button>
						<a href="{{route('admin.reason.index')}}" class="button is-default">@lang('admin.cancel')</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection



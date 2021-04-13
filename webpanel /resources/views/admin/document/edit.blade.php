@extends('admin.layout.base')

@section('title', __('admin.document.update_document'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.document.update', $document->id )}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
            	<input type="hidden" name="_method" value="PATCH">
				<div class="field">
					<label for="name" class="label">@lang('admin.document.document_name')</label>
					<div class="control">
						<input  class="input" type="text" value="{{ $document->name }}" name="name" required id="name" placeholder="Enter the @lang('admin.document.document_name')">
					</div>
				</div>

                <div class="field">
                    <label for="name" class="label">@lang('admin.document.document_type')</label>

                        <select class="input" name="type">
                            <option value="DRIVER" @if($document->type == 'DRIVER') selected @endif>@lang('admin.document.driver_review')</option>
                            <option value="VEHICLE" @if($document->type == 'VEHICLE') selected @endif>@lang('admin.documents')</option>
                        </select>

                </div>

				<div class="field">
					<label for="zipcode" class="label"></label>
					<div class="control">
						<button type="submit" class="button is-link">@lang('admin.document.update_document')</button>
						<a href="{{route('admin.document.index')}}" class="button is-default">@lang('admin.cancel')</a>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection

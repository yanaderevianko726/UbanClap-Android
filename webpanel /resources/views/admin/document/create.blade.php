@extends('admin.layout.base')

@section('title', __('admin.document.add_Document'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.document.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="column label">@lang('admin.document.document_name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="Enter the @lang('admin.document.document_name')">
                    </div>
                </div>

                <div class="field">
                    <label for="name" class="column label">@lang('admin.document.document_type')</label>
<div class="select">
    <select class="input" name="type">
        <option value="DRIVER">@lang('admin.document.driver_review')</option>
        <option value="VEHICLE">@lang('admin.documents')</option>
    </select>
</div>
                        

                </div>

                <div class="field">
                    <label for="zipcode" class="column label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.document.add_Document')</button>
                        <a href="{{route('admin.document.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

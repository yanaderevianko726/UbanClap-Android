@extends('admin.layout.base')

@section('title', __('admin.reason.add_reason'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <h5 style="margin-bottom: 2em;">@lang('admin.reason.add_reason')</h5>

            <form  action="{{route('admin.reason.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="type" class="label">@lang('admin.reason.type')</label>
                    <div class="select">
                        <select class="control" name="type" id="type">
                            <option value="">Select</option>
                            <option value="USER">@lang('admin.user')</option>
                            <option value="PROVIDER">@lang('admin.provider')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="reason" class="label">@lang('admin.reason.reason')</label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="{{ old('reason') }}" name="reason" required id="reason" placeholder="@lang('admin.reason.reason')">
                    </div>
                </div>

                <div class="field">
                    <label for="max_amount" class="label">@lang('admin.reason.status')</label>
                    <div class="select">
                        <select class="control" name="status" id="status">
                            <option value="">Select</option>
                            <option value="1">@lang('admin.active')</option>
                            <option value="0">@lang('admin.inactive')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.reason.add_reason')</button>
                        <a href="{{route('admin.reason.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection


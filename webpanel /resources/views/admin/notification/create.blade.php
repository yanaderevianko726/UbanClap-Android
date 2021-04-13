@extends('admin.layout.base')

@section('title', __('admin.notification.add'))

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-datetimepicker.min.css')}}">
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.notification.add')</h5>

            <form  action="{{route('admin.notification.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}            	

                <div class="field">
                    <label for="notify_type" class="label">@lang('admin.notification.notify_type')</label>
                    <div class="control">
                        <select name="notify_type" class="input">
                            <option value="all">All</option>
                            <option value="user">@lang('admin.user')s</option>
                            <option value="provider">@lang('admin.provider')s</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="picture" class="label">@lang('admin.notification.notify_image')</label>
                    <div class="control">
                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="notify_desc" class="label">@lang('admin.notification.notify_desc')</label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="{{ old('description') }}" name="description" required id="description" placeholder="@lang('admin.notification.notify_desc')">
                    </div>
                </div>

                <div class="field">
                    <label for="expiry_date" class="label">@lang('admin.notification.notify_expiry')</label>
                    <div class="control">
                        <input class="form-control date" autocomplete="off"  type="date" value="{{ old('expiry_date') }}" name="expiry_date" required id="expiry_date" placeholder="@lang('admin.notification.notify_expiry')">
                    </div>
                </div>
                {{--  <input class="form-control datetimepicker" autocomplete="off"  type="hidden" value="00" name="expiry_date" required id="expiry_date">  --}}

                <div class="field">
                    <label for="notify_status" class="label">@lang('admin.notification.notify_status')</label>
                    <div class="control">
                        <select name="status" class="input">
                            <option value="active">@lang('admin.active')</option>
                            <option value="inactive">@lang('admin.inactive')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.notification.add')</button>
                        <a href="{{route('admin.notification.index')}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('asset/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/moment-with-locales.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
    //your code here
    $(function () {
        $('.datetimepicker').datetimepicker({defaultDate: moment(), minDate: moment(), format: 'YYYY-MM-DD HH:mm'});
    });
});

</script>
@endsection
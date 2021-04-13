@extends('admin.layout.base')

@section('title', __('admin.promocode.add_promocode'))

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-datetimepicker.min.css')}}">

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="button is-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.promocode.add_promocode')</h5>
            
            <p style="color: #cc0033;"><b>Nota:</b> Each user can use this coupon once until the expiration date.</p>
            <br>

            <form  action="{{route('admin.promocode.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}

                <div class="field">
                    <label for="promo_code" class="label">@lang('admin.promocode.promocode')</label>
                    <div class="control">
                        <input  class="input" autocomplete="off"  type="text" value="{{ old('promo_code') }}" name="promo_code" required id="promo_code" placeholder="@lang('admin.promocode.promocode')">
                    </div>
                </div>
                <div class="field">
                    <label for="percentage" class="label">@lang('admin.promocode.percentage')</label>
                    <div class="control">
                        <input  class="input" type="number" value="{{ old('percentage') }}" name="percentage" required id="percentage" placeholder="@lang('admin.promocode.percentage')">
                    </div>
                </div>
                <div class="field">
                    <label for="max_amount" class="label">@lang('admin.promocode.max_amount')</label>
                    <div class="control">
                        <input type="number" class="input" name="max_amount" required id="max_amount" placeholder="@lang('admin.promocode.max_amount')" value="{{old('max_amount')}}">
                    </div>
                </div>

                <div class="field">
                    <label for="expiration" class="label">@lang('admin.promocode.expiration')</label>
                    <div class="date">
                        <input class="form-control date" type="date" data-display-mode="inline" data-is-range="true" data-close-on-select="false" value="{{old('expiration')}}" name="expiration" required id="expiration" placeholder="@lang('admin.promocode.expiration')">
                    </div>
                </div>

                <div class="field">
                    <label for="promo_description" class="label">@lang('admin.promocode.promo_description')</label>
                    <div class="control">
                        <textarea id="promo_description" placeholder="Description" class="input" name="promo_description">0% off, Maximum discount of 0{{old('promo_description')}}</textarea>
                    </div>
                </div>


                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">@lang('admin.promocode.add_promocode')</button>
                        <a href="{{route('admin.promocode.index')}}" class="button is-default">@lang('admin.cancel')</a>
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

$("#percentage").on('keyup', function () {
    var per = $(this).val() || 0;
    var max = $("#max_amount").val() || 0;
    $("#promo_description").val(per + '% Off! Maximum discount amount ' + max);
});

$("#max_amount").on('keyup', function () {
    var max = $(this).val() || 0;
    var per = $("#percentage").val() || 0;
    $("#promo_description").val(per + '% Off! Maximum discount amount ' + max);
});


</script>
@endsection

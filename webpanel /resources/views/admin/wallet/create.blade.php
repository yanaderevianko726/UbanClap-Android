@extends('admin.layout.base')

<?php
if ($type == 1) {
    $title = Lang::get('admin.prd_settle');
    $back_route = "admin.providertransfer";
} else {
    $title = Lang::get('admin.flt_settle');
    $back_route = "admin.fleettransfer";
}
?>

@section('title', $title)

@section('content')


<style>
    .input-group{
        width: none;
    }
    .input-group .fa-search{
        display: table-cell;
    }
</style>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <h5 style="margin-bottom: 2em;">{{$title}}</h5>

            <form  action="{{route('admin.transferstore')}}" method="POST" enctype="multipart/form-data" role="form" autocomplete="off">
                {{csrf_field()}}
                <div class="field">
                    @if($type==1)
                    <label for="namesearch" class="label">@lang('admin.service.Provider_Name')</label>
                    @else
                    <label for="namesearch" class="label">@lang('admin.fleet.fleet_name')</label>
                    @endif
                    <div class="column">
                        <div class="input-group">
                            <input  class="input" type="text" value="{{ old('name') }}" name="name" required id="namesearch" placeholder="Search by Name" required="" aria-describedby="basic-addon2">
                            <span class="input-group-addon fa fa-search"  id="basic-addon2"></span>
                        </div>
                        <input type="hidden" name="stype" value="{{$type}}">
                        <input type="hidden" name="from_id" id="from_id" value="">
                    </div>
                </div>

                <div class="field column">
                    <label for="amount" class="label">@lang('admin.amount')</label>
                    <div>
                        <input class="input" type="text" value="{{ old('amount') }}" name="amount" id="amount" placeholder="Enter the amount" required="" min="1">
                    </div>
                    <div class="column">

                        <span class="showcal">
                            <i><b>Ballance
                                    <span id="wallet_balance">-</span>
                                </b></i>
                        </span>
                    </div>
                </div>
                <div class="columns">
                    <div class="field column">
                        <label for="type" class="label">@lang('admin.type')</label>
                        <div class="select">
                            <select class="select" name="type">
                                <option value="C">Credit</option>
                                <option value="D">Debit</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="field column">
                        <label for="send_by" class="label">@lang('admin.by')</label>
                        <div class="select">
                            <select class="select" name="send_by">
                                <option value="online">Online</option>
                                <option value="online">Offline</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="column">
                        <button type="submit" class="button is-link">@lang('admin.settle')</button>
                        <a href="{{route($back_route)}}" class="button is-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<link href="{{ asset('asset/css/jquery-ui.css') }}" rel="stylesheet">

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('asset/js/jquery-ui.js') }}"></script>
<script src="{{asset('main/vendor/maskmoney/jquery.maskMoney.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
var sflag = '{{$type}}';
$('#namesearch').autocomplete({
    source: function (request, response) {
        $.ajax
                ({
                    type: "GET",
                    url: '{{ route("admin.transfersearch") }}',
                    data: {stext: request.term, sflag: sflag},
                    dataType: "json",
                    success: function (responsedata, status, xhr)
                    {
                        if (!responsedata.data.length) {
                            var data = [];
                            data.push({
                                id: 0,
                                label: "Sem registros"
                            });
                            response(data);
                        } else {
                            response($.map(responsedata.data, function (item) {
                                if (sflag == 1)
                                    var name_alias = item.first_name + " " +item.last_name + " - " + item.id;
                                else
                                    var name_alias = item.name + " - " + item.id;

                                return {
                                    value: name_alias,
                                    id: item.id,
                                    bal: item.wallet_balance
                                }
                            }));
                        }
                    }
                });
    },
    minLength: 2,
    change: function (event, ui)
    {
        if (ui.item == null) {
            $("#namesearch").val('');
            $("#namesearch").focus();
            $("#wallet_balance").text("-");
        } else {
            if (ui.item.id == 0) {
                $("#namesearch").val('');
                $("#namesearch").focus();
                $("#wallet_balance").text("-");
            }
        }
    },
    select: function (event, ui) {
        $("#from_id").val(ui.item.id);
        $("#wallet_balance").text(ui.item.bal);
    }
});

$('#amount').maskMoney()

</script>
@endsection

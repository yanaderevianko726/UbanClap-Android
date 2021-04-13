@extends('fleet.layout.base')

@section('title', 'Fleet Wallet Transfer')

@section('content')

<div class="content-area py-1">
        <div class="container-fluid">

            <div class="box box-block bg-white">
                <h5 class="mb-1">Valor de transferência  (@lang('provider.current_balance') : {{currency($wallet_balance)}})</h5>
                <div class="column no-margin">
                    <form class="profile-form" action="{{route('fleet.requestamount')}}" method="POST"  role="form" id="requestform">
                    {{ csrf_field() }}
                    <div class="field">
                         <div class="column is-3" style="padding: 0px;">
                            <input type="hidden" name='type' value='fleet'/>
                            <input type="text" class="input" placeholder="@lang('provider.amount')" name="amount" value="" required="">
                        </div>
                        <div class="col-xs-2">
                           <button type="submit" class="button is-block btn-primary">@lang('provider.transfer')</button>
                        </div>
                    </div>
                    </form>
               </div>
                <table class="table is-striped is-bordered dataTable" id="table-4">
                    <thead>
                        <tr>
                            <th>@lang('provider.sno')</th>
                            <th>@lang('provider.transaction_ref')</th>
                            <th>@lang('provider.datetime')</th>
                            <th>@lang('provider.amount')</th>
                            <th>@lang('provider.status')</th>
                        </tr>
                    </thead>
                    <tbody>
                       @php($total=0)
                       @foreach($pendinglist as $index=>$pending)
                            @php($total+=$pending->amount)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$pending->alias_id}}</td>
                                <td>{{$pending->created_at->diffForHumans()}}</td>
                                <td>{{currency($pending->amount)}}</td>
                                <td>
                                    {{$pending->status == 0 ? 'Pending' : 'Approved'}}
                                    <a class="button  is-danger is-link btn-block" href="{{ route('fleet.cancel') }}?id={{$pending->id}}">@lang('provider.cancel')</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    @if($wallet_balance<=0)
        $("#requestform :input").prop("disabled", true);
    @elseif($total==$wallet_balance)
        $("#requestform :input").prop("disabled", true);
    @endif
</script>
@endsection

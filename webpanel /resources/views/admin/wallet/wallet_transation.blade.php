@extends('admin.layout.base')

@section('title', 'Admin Transactions')

@section('content')

<div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1">Total Transactions (@lang('provider.current_balance') : {{currency($wallet_balance)}})</h5>
                <div class="table-container">
                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.sno')</th>
                            <th>@lang('admin.transaction_ref')</th>
                            <th>@lang('admin.datetime')</th>
                            <th>@lang('admin.transaction_desc')</th>
                            <th>@lang('admin.status')</th>
                            <th>@lang('admin.amount')</th>
                        </tr>
                    </thead>
                    <tbody>
                       @php($page = ($pagination->currentPage-1)*$pagination->perPage)
                       @foreach($wallet_transation as $index=>$wallet)
                       @php($page++)
                            <tr>
                                <td>{{$page}}</td>
                                <td>{{$wallet->transaction_alias}}</td>
                                <td>{{$wallet->created_at->diffForHumans()}}</td>
                                <td>{{$wallet->transaction_desc}}</td>
                                <td>{{$wallet->type == 'C' ? 'Credit' : 'Debit'}}</td>
                                <td>{{currency($wallet->amount)}}
                                </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                @include('common.pagination')
                <p style = "color: red;"> {{config ('constants.booking_prefix', '')}} - Request Transactions, PSET - Transaction from @lang ('admin.provider'), URC - Refills from @lang ('admin.user') </p></div>
            
        </div>
    </div>
@endsection




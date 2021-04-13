@extends('admin.layout.base')

@section('title', __('admin.payment.payment_history'))

@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            <div class="box box-block bg-white">
                <div class="table-container">
                    <table class="table is-responsive is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>@lang('admin.payment.request_id')</th>
                            <th>@lang('admin.payment.transaction_id')</th>
                            <!-- <th>@lang('admin.payment.from')</th>
                            <th>@lang('admin.payment.to')</th> -->
                            <th>@lang('admin.payment.total_amount')</th>
                            <th>@lang('admin.payment.provider_amount')</th>
                            <th>@lang('admin.payment.payment_mode')</th>
                            <th>@lang('admin.payment.payment_status')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $index => $payment)
                        <tr>
                            <td>{{$payment->id}}</td>
                            <td>@if(!empty($payment->payment->payment_id)){{$payment->payment->payment_id}}@else NA @endif</td>
                            <!-- <td>{{$payment->user?$payment->user->first_name:''}} {{$payment->user?$payment->user->last_name:''}}</td>
                            <td>{{$payment->provider?$payment->provider->first_name:''}} {{$payment->provider?$payment->provider->last_name:''}}</td> -->
                            <td>{{currency($payment->payment->total)}}</td>
                            <td>{{currency($payment->payment->provider_pay)}}</td>
                            <td>{{$payment->payment_mode == "CASH" ? "CASH" : "CARD"}}</td>
                            <td>
                                @if($payment->paid)
                                    Paid
                                @else
                                    Not Paid
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.requests.show', $payment->id) }}" class="dropdown-item">
                                    <i class="fa fa-search"></i> 
                                    More details
                                </a>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>@lang('admin.payment.request_id')</th>
                            <th>@lang('admin.payment.transaction_id')</th>
                            <!-- <th>@lang('admin.payment.from')</th>
                            <th>@lang('admin.payment.to')</th> -->
                            <th>@lang('admin.payment.total_amount')</th>
                            <th>@lang('admin.payment.provider_amount')</th>
                            <th>@lang('admin.payment.payment_mode')</th>
                            <th>@lang('admin.payment.payment_status')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </tfoot>
                </table>
                @include('common.pagination')
            </div>
            </div>
        </div>
    </div>
@endsection
<!--//TODO ALLAN - Alterações Debit na máquina e voucher-->
@extends('admin.layout.base')

@section('title', 'Request History')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            @if(Setting::get('demo_mode', 0) == 1)
        <div class="column" style="height:50px;color:red;">
                    ** Demo Mode : @lang('admin.demomode')
                </div>
                @endif
            @if(count($requests) != 0)
            <div class="table-container">
                <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.request.Booking_ID')</th>
                        <th>@lang('admin.request.User_Name')</th>
                        <th>@lang('admin.request.Provider_Name')</th>
                        <th>@lang('admin.request.Date_Time')</th>
                        <th>@lang('admin.status')</th>
                        <th>@lang('admin.amount')</th>
                        <th>@lang('admin.request.Payment_Mode')</th>
                        <th>@lang('admin.request.Payment_Status')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($requests as $index => $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->booking_id }}</td>
                        <td>
                            @if($request->provider)
                                {{ $request->user?$request->user->first_name:'' }} {{ $request->user?$request->user->last_name:'' }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($request->provider)
                                {{ $request->provider?$request->provider->first_name:'' }} {{ $request->provider?$request->provider->last_name:'' }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($request->created_at)
                                <span class="text-muted">{{$request->created_at->diffForHumans()}}</span>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($request->status == "COMPLETED")
                                <span class="tag tag-success">COMPLETED</span>
                            @elseif($request->status == "CANCELLED")
                                <span class="tag tag-danger">CANCELLED</span>
                            @elseif($request->status == "ARRIVED")
                                <span class="tag tag-info">ARRIVED</span>
                            @elseif($request->status == "SEARCHING")
                                <span class="tag tag-info">SEARCHING</span>
                            @elseif($request->status == "ACCEPTED")
                                <span class="tag tag-info">@lang('admin.provider') ACCEPTED</span>
                            @elseif($request->status == "STARTED")
                                <span class="tag tag-info">STARTED</span>
                            @elseif($request->status == "DROPPED")
                                <span class="tag tag-info">FINISHED</span>
                            @elseif($request->status == "PICKEDUP")
                                <span class="tag tag-info">ONGOING</span>
                            @elseif($request->status == "SCHEDULED")
                                <span class="tag tag-info">SCHEDULED</span>
                            @endif
                        </td>
                        <td>
                            @if($request->payment != "")
                                {{ currency($request->payment->total) }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($request->payment_mode == "CASH")
                                CASH
                            @elseif($request->payment_mode == "DEBIT_MACHINE")
                                DEBIT MACHINE
                            @elseif($request->payment_mode == "VOUCHER")
                                VOUCHER
                            @elseif($request->payment_mode == "CARD")
                                CARD
                            @else
                                $request->payment_mode
                            @endif
                        </td>
                        <td>
                            @if($request->paid)
                                PAID
                            @else
                                NOT PAID
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.requests.show', $request->id) }}" class="button is-info">
                                <i class="fa fa-search"></i> More details
                            </a>
                            <form action="{{ route('admin.requests.destroy', $request->id) }}" method="POST">
                                {{ csrf_field() }}
                                @if( Setting::get('demo_mode', 0) == 0)
                                {{ method_field('DELETE') }}
                                @can('ride-delete')
                                <button type="submit " class="button is-danger">
                                    <i class="fa fa-trash"></i> {{__('admin.delete')}}
                                </button>
                                @endcan
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>@lang('admin.request.Booking_ID')</th>
                        <th>@lang('admin.request.User_Name')</th>
                        <th>@lang('admin.request.Provider_Name')</th>
                        <th>@lang('admin.request.Date_Time')</th>
                        <th>@lang('admin.status')</th>
                        <th>@lang('admin.amount')</th>
                        <th>@lang('admin.request.Payment_Mode')</th>
                        <th>@lang('admin.request.Payment_Status')</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </tfoot>
            </table>
            @include('common.pagination')
            @else
            <h6 class="no-result">no results found</h6>
            @endif 
            </div>
        </div>
    </div>
</div>
@endsection
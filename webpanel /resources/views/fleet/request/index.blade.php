@extends('fleet.layout.base')

@section('title', 'Request History')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1">Request History </h5>
            @if(count($requests) != 0)
            <div class="table-container">
                                    <table class="table is-responsive is-fullwidth is-striped">
                <thead>
                    <tr>
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
                        <td>{{ $request->booking_id }}</td>
                        <td>{{ $request->user->first_name }} {{ $request->user->last_name }}</td>
                        <td>
                            @if($request->provider)
                                {{ $request->provider->first_name }} {{ $request->provider->last_name }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{$request->created_at->diffForHumans()}}</td>
                        <td>
                            @if($request->status == "COMPLETED")
                                <span class="tag tag-success">CONCLUÍDA</span>
                            @elseif($request->status == "CANCELLED")
                                <span class="tag tag-danger">CANCELADA</span>
                            @elseif($request->status == "ARRIVED")
                                <span class="tag tag-info">EM ANDAMENTO</span>
                            @elseif($request->status == "SEARCHING")
                                <span class="tag tag-info">PESQUISANDO</span>
                            @elseif($request->status == "ACCEPTED")
                                <span class="tag tag-info">@lang('admin.provider') A CAMINHO</span>
                            @elseif($request->status == "STARTED")
                                <span class="tag tag-info">VIAGEM INICIADA</span>
                            @elseif($request->status == "DROPPED")
                                <span class="tag tag-info">NO DESTINO</span>
                            @elseif($request->status == "PICKEDUP")
                                <span class="tag tag-info">INICIANDO</span>
                            @elseif($request->status == "SCHEDULED")
                                <span class="tag tag-info">AGENDADA</span>
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
                                Debit Machine
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
                            Paid
                            @else
                                Not Paid
                            @endif
                        </td>
                        <td>
                                
                                    <a href="{{ route('fleet.requests.show', $request->id) }}" >
                                        <i class="fa fa-search"></i> More details
                                    </a>
                                    @if( Setting::get('demo_mode', 0) == 0)
                                        <form action="{{ route('fleet.requests.destroy', $request->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit">
                                                <i class="fa fa-trash"></i> {{__('admin.delete')}}
                                            </button>
                                        </form>
                                    @endif

                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
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
            @else
            <h6 class="no-result">No results found</h6>
            @endif 
        </div>
    </div>
    </div>
</div>
@endsection
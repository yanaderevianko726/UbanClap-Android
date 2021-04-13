<!--//TODO ALLAN - Alterações Debit na máquina e voucher-->
@extends('admin.layout.base')

@section('title', __('admin.request.request_details'))

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="columns">
                <div class="column">
                    <ul class="column">
                        <li >@lang('admin.request.Booking_ID') : {{ $request->booking_id }}</li>
                        
                        <li >@lang('admin.request.User_Name') : {{ $request->user->first_name }}</li>

                        <li >@lang('admin.request.Provider_Name') 
                        @if($request->provider)
                        : {{ $request->provider->first_name }}</li>
                        @else
                        <li >@lang('admin.request.provider_not_assigned')</li>
                        @endif
                        {{--  <li >@lang('admin.request.total_distance') : {{ $request->distance ? $request->distance : '0' }}{{$request->unit}}</li>  --}}
                        @if($request->status == 'SCHEDULED')
                        <li >@lang('admin.request.ride_scheduled_time') : 
                            @if($request->schedule_at != "")
                                {{ date('jS \of F Y h:i:s A', strtotime($request->schedule_at)) }}
                            @else
                                -
                            @endif
                        </li>
                        @else
                        <li >@lang('admin.request.ride_start_time') : 
                            @if($request->started_at != "")
                                {{ date('jS \of F Y h:i:s A', strtotime($request->started_at)) }}
                            @else
                                -
                            @endif
                         </li>
                        <li >@lang('admin.request.ride_end_time') : 
                            @if($request->finished_at != "")
                                {{ date('jS \of F Y h:i:s A', strtotime($request->finished_at)) }}
                            @else
                                -
                            @endif
                        </li>
                        @endif
                        {{--  <li >@lang('admin.request.pickup_aliress') : {{ $request->s_aliress ? $request->s_aliress : '-' }}</li>  --}}
                        <li>Service Location : {{ $request->d_aliress ? $request->d_aliress : '-' }}</li>
                        @if($request->payment)
                        <li >@lang('admin.request.base_price') : {{ currency($request->payment->fixed) }}</li>
                        @if($request->service_type->calculator=='MIN')
                            <li >@lang('admin.request.minutes_price')</li>
                            <li >{{ currency($request->payment->minute) }}</li>
                        @endif
                        @if($request->service_type->calculator=='HOUR')
                            <li >@lang('admin.request.hours_price')</li>
                            <li >{{ currency($request->payment->hour) }}</li>
                        @endif
                        @if($request->service_type->calculator=='DISTANCE')
                            <li >@lang('admin.request.distance_price')</li>
                            <li >{{ currency($request->payment->distance) }}</li>
                        @endif
                        @if($request->service_type->calculator=='DISTANCEMIN')
                            <li >@lang('admin.request.minutes_price')</li>
                            <li >{{ currency($request->payment->minute) }}</li>
                            <li >@lang('admin.request.distance_price')</li>
                            <li >{{ currency($request->payment->distance) }}</li>
                        @endif
                        @if($request->service_type->calculator=='DISTANCEHOUR')
                            <li >@lang('admin.request.hours_price')</li>
                            <li >{{ currency($request->payment->hour) }}</li>
                            <li >@lang('admin.request.distance_price')</li>
                            <li >{{ currency($request->payment->distance) }}</li>
                        @endif
                        <li >@lang('admin.request.commission') : {{ currency($request->payment->commision) }}</li>
                        <li >@lang('admin.request.fleet_commission') : {{ currency($request->payment->fleet) }}</li>
                        <li >@lang('admin.request.discount_price') : {{ currency($request->payment->discount) }}</li>
                        <li >@lang('admin.request.peak_amount') : {{ currency($request->payment->peak_amount) }}</li>
                        <li >@lang('admin.request.peak_commission') : {{ currency($request->payment->peak_comm_amount) }}</li>
                        {{--  <li >@lang('admin.request.waiting_charge') : {{ currency($request->payment->waiting_amount) }}</li>
                        <li class="column" style="paliing-right:0px;">@lang('admin.request.waiting_commission') : {{ currency($request->payment->waiting_comm_amount) }}</li>  --}}
                        <li >@lang('admin.request.tax_price') : {{ currency($request->payment->tax) }}</li>
                       {{--  <li >@lang('admin.request.surge_price') : : {{ currency($request->payment->surge) }}</li> --}}
                        <li >@lang('admin.request.tips') : {{ currency($request->payment->tips) }}</li>
                        <li >@lang('user.ride.round_off') : {{ currency($request->payment->round_of) }}</li>
                        <li >@lang('admin.request.total_amount') : {{ currency($request->payment->total+$request->payment->tips) }}</li>
                        <li >@lang('admin.request.wallet_deduction') : {{ currency($request->payment->wallet) }}</li>
                        {{-- <li >@lang('admin.request.paid_amount') : : {{ currency($request->payment->payable) }}</li> --}}
                        <li >@lang('admin.request.payment_mode') : 
                            @if($request->payment->payment_mode == 'CASH')
                                CASH
                            @elseif($request->payment->payment_mode == 'DEBIT_MACHINE')
                                DEBIT MACHINE
                            @elseif($request->payment->payment_mode == 'VOUCHER')
                                VOUCHER
                            @else
                                CARD
                            @endif
                        </li>
                        
                        @if($request->payment->payment_mode=='CARD')
                            <li >@lang('admin.request.card_amount') : {{ currency($request->payment->card) }}</li>
                        @else
                            <li >@lang('admin.request.cash_amount') : {{ currency($request->payment->cash) }}</li>
                        @endif
                        <li >@lang('admin.request.provider_earnings') : {{ currency($request->payment->provider_pay - $request->payment->discount) }}</li>
                        <li >Admin commission : {{ currency($request->payment->provider_commission) }}</li>
                        @endif
                        <li >@lang('admin.request.ride_status') : 
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
                            <br/> {{ $request->cancel_reason }}
                        </li>
                        @if($request->status =="COMPLETED")
                        <li >@lang('admin.request.user_rating') : 
                        @if($request->user_rated ==1)
                            {{ $request->rating->user_rating}}
                             @else - @endif
                        </li>
                        <li >@lang('admin.request.user_comment') : 
                        @if($request->user_rated ==1)
                          {{ $request->rating->user_comment }}
                             @else
                                -
                            @endif
                        </li>
                        <li >@lang('admin.request.provider_rating') : 
                        @if($request->provider_rated ==1)
                            {{ $request->rating->provider_rating }}
                             @else
                                -
                            @endif
                        </li>
                        <li >@lang('admin.request.provider_comment') : 
                        @if($request->provider_rated ==1)
                            {{ $request->rating->provider_comment }}
                             @else
                                -
                            @endif
                        </li>
                       @endif
                       {{--  <li >@lang('admin.request.comments')</li>  --}}
                       {{--  <li >{{ $request->comments ? $request->comments : '-' }}</li>  --}}
                    </ul>
                </div>
                <div class="column">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style type="text/css">
    #map {
        height: 450px;
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript">
    var map;
    var zoomLevel = 8;

    function initMap() {

        map = new google.maps.Map(document.getElementById('map'));

        var marker = new google.maps.Marker({
            map: map,
            icon: '/asset/img/marker-start.png',
            anchorPoint: new google.maps.Point(0, -29)
        });

         var markerSecond = new google.maps.Marker({
            map: map,
            icon: '/asset/img/marker-end.png',
            anchorPoint: new google.maps.Point(0, -29)
        });

        var bounds = new google.maps.LatLngBounds();

        source = new google.maps.LatLng({{ $request->s_latitude }}, {{ $request->s_longitude }});
        destination = new google.maps.LatLng({{ $request->d_latitude }}, {{ $request->d_longitude }});

        marker.setPosition(source);
        markerSecond.setPosition(destination);

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true, preserveViewport: true});
        directionsDisplay.setMap(map);

        directionsService.route({
            origin: source,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                console.log(result);
                directionsDisplay.setDirections(result);

                marker.setPosition(result.routes[0].legs[0].start_location);
                markerSecond.setPosition(result.routes[0].legs[0].end_location);
            }
        });

        @if($request->provider && $request->status != 'COMPLETED')
        var markerProvider = new google.maps.Marker({
            map: map,
            icon: "/asset/img/marker-car.png",
            anchorPoint: new google.maps.Point(0, -29)
        });

        provider = new google.maps.LatLng({{ $request->provider->latitude }}, {{ $request->provider->longitude }});
        markerProvider.setVisible(true);
        markerProvider.setPosition(provider);
        console.log('Provider Bounds', markerProvider.getPosition());
        bounds.extend(markerProvider.getPosition());
        @endif

        bounds.extend(marker.getPosition());
        bounds.extend(markerSecond.getPosition());
        map.fitBounds(bounds);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('constants.map_key') }}&libraries=places&callback=initMap" async defer></script>
@endsection

@extends('fleet.layout.base')

@section('title', 'Request details ')

@section('content')
    <div class="content-area py-1">
        <div class="container-fluid">
            <div class="box box-block bg-white">
                <h4>@lang('admin.request.request_details')</h4>
                <a href="{{ route('fleet.requests.index') }}" class="button is-default pull-right">
                    <i class="fa fa-angle-left"></i> @lang('admin.back')
                </a>
                <div class="columns">
                    <div class="column">
                        <dl class="columns">
                            <dt class="column">@lang('admin.request.Booking_ID') :</dt>
                            <dd class="column">{{ $request->booking_id }}</dd>

                            <dt class="column">@lang('admin.request.User_Name') :</dt>
                            <dd class="column">{{ $request->user->first_name }}</dd>

                            <dt class="column">@lang('admin.request.Provider_Name') :</dt>
                            @if($request->provider)
                                <dd class="column">{{ $request->provider->first_name }}</dd>
                            @else
                                <dd class="column">@lang('admin.request.provider_not_assigned')</dd>
                            @endif

                            <dt class="column">@lang('admin.request.total_distance') :</dt>
                            <dd class="column">{{ $request->distance ? $request->distance : '-' }}{{$request->unit}}</dd>

                            @if($request->status == 'SCHEDULED')
                                <dt class="column">@lang('admin.request.ride_scheduled_time') :</dt>
                                <dd class="column">
                                    @if($request->schedule_at != "")
                                        {{ date('jS \of F Y h:i:s A', strtotime($request->schedule_at)) }}
                                    @else
                                        -
                                    @endif
                                </dd>
                            @else
                                <dt class="column">@lang('admin.request.ride_start_time') :</dt>
                                <dd class="column">
                                    @if($request->started_at != "")
                                        {{ strftime('%A, %d de %B de %Y', strtotime($request->started_at)) }}
                                    @else
                                        -
                                    @endif
                                </dd>

                                <dt class="column">@lang('admin.request.ride_end_time') :</dt>
                                <dd class="column">
                                    @if($request->finished_at != "")
                                        {{ date('jS \of F Y h:i:s A', strtotime($request->finished_at)) }}
                                    @else
                                        -
                                    @endif
                                </dd>
                            @endif

                            <dt class="column">@lang('admin.request.pickup_address') :</dt>
                            <dd class="column">{{ $request->s_address ? $request->s_address : '-' }}</dd>

                            <dt class="column">@lang('admin.request.drop_address') :</dt>
                            <dd class="column">{{ $request->d_address ? $request->d_address : '-' }}</dd>

                            @if($request->payment)
                                <dt class="column">@lang('admin.request.base_price') :</dt>
                                <dd class="column">{{ currency($request->payment->fixed) }}</dd>
                                @if($request->service_type->calculator=='MIN')
                                    <dt class="column">@lang('admin.request.minutes_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->minute) }}</dd>
                                @endif
                                @if($request->service_type->calculator=='HOUR')
                                    <dt class="column">@lang('admin.request.hours_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->hour) }}</dd>
                                @endif
                                @if($request->service_type->calculator=='DISTANCE')
                                    <dt class="column">@lang('admin.request.distance_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->distance) }}</dd>
                                @endif
                                @if($request->service_type->calculator=='DISTANCEMIN')
                                    <dt class="column">@lang('admin.request.minutes_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->minute) }}</dd>
                                    <dt class="column">@lang('admin.request.distance_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->distance) }}</dd>
                                @endif
                                @if($request->service_type->calculator=='DISTANCEHOUR')
                                    <dt class="column">@lang('admin.request.hours_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->hour) }}</dd>
                                    <dt class="column">@lang('admin.request.distance_price') :</dt>
                                    <dd class="column">{{ currency($request->payment->distance) }}</dd>
                                @endif
                                <dt class="column">@lang('admin.request.commission') :</dt>
                                <dd class="column">{{ currency($request->payment->commision) }}</dd>

                                <dt class="column">@lang('admin.request.fleet_commission') :</dt>
                                <dd class="column">{{ currency($request->payment->fleet) }}</dd>

                                <dt class="column">@lang('admin.request.discount_price') :</dt>
                                <dd class="column">{{ currency($request->payment->discount) }}</dd>

                                <dt class="column">@lang('admin.request.peak_amount') :</dt>
                                <dd class="column">{{ currency($request->payment->peak_amount) }}</dd>

                                <dt class="column">@lang('admin.request.peak_commission') :</dt>
                                <dd class="column">{{ currency($request->payment->peak_comm_amount) }}</dd>

                                <dt class="column">@lang('admin.request.waiting_charge') :</dt>
                                <dd class="column">{{ currency($request->payment->waiting_amount) }}</dd>

                                <dt class="column"
                                    style="padding-right:0px;">@lang('admin.request.waiting_commission') :
                                </dt>
                                <dd class="column">{{ currency($request->payment->waiting_comm_amount) }}</dd>

                                <dt class="column">@lang('admin.request.tax_price') :</dt>
                                <dd class="column">{{ currency($request->payment->tax) }}</dd>

                            <!--  <dt class="column">@lang('admin.request.surge_price') :</dt>
                        <dd class="column">{{ currency($request->payment->surge) }}</dd>
 -->
                                <dt class="column">@lang('admin.request.tips') :</dt>
                                <dd class="column">{{ currency($request->payment->tips) }}</dd>

                                <dt class="column">@lang('user.ride.round_off') :</dt>
                                <dd class="column">{{ currency($request->payment->round_of) }}</dd>

                                <dt class="column">@lang('admin.request.total_amount') :</dt>
                                <dd class="column">{{ currency($request->payment->total+$request->payment->tips) }}</dd>

                                <dt class="column">@lang('admin.request.wallet_deduction') :</dt>
                                <dd class="column">{{ currency($request->payment->wallet) }}</dd>

                                <dt class="column">@lang('admin.request.payment_mode') :</dt>
                                <dd class="column">{{ $request->payment->payment_mode=="CASH"?'CASH':'CARD' }}</dd>
                                @if($request->payment->payment_mode=='CASH')
                                    <dt class="column">@lang('admin.request.cash_amount') :</dt>
                                    <dd class="column">{{ currency($request->payment->cash) }}</dd>
                                @else
                                    <dt class="column">@lang('admin.request.card_amount') :</dt>
                                    <dd class="column">{{ currency($request->payment->card) }}</dd>
                                @endif

                                <dt class="column">@lang('admin.request.provider_earnings'):</dt>
                                <dd class="column">{{ currency($request->payment->provider_pay) }}</dd>
                            @endif

                            <dt class="column">@lang('admin.request.ride_status') :</dt>
                            <dd class="column">
                                @if($request->status == "COMPLETED")
                                    COMPLETED
                                @else
                                    {{ $request->status }}
                                @endif
                            </dd>

                        </dl>
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
        var zoomLevel = 11;

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
            }, function (result, status) {
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
    <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('constants.map_key') }}&libraries=places&callback=initMap"
            async defer></script>
@endsection

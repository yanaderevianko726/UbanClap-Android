@extends('user.layout.base')

@section('title', 'Upcoming Trips ')

@section('content')

<section class="hero is-info welcome is-small">
    
    <div class="hero-body">
        <div class="container">
            <h4 class="title">@lang('user.profile.change_password')</h4>
            <h4 class="subtitle">
                Keep password strong to secure personal info
            </h4>
        
    <div class="container box ">
        <div class="columns no-margin">
            <div class="column">
                <h4 class="page-title">@lang('user.upcoming_trips')</h4>
            </div>
        </div>

        <div class="columns no-margin ride-detail">
            <div class="column">
            @if($trips->count() > 0)

                <table class="table is-condensed" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>@lang('user.booking_id')</th>
                            <th>@lang('user.schedule_date')</th>
                            <th>@lang('user.type')</th>
                            <th>@lang('user.payment')</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($trips as $trip)

                        <tr data-toggle="collapse" data-target="#trip_{{$trip->id}}" class="accordion-toggle collapsed">
                            <td><span class="arcolumns-icon fa fa-chevron-right"></span></td>
                            <td>{{$trip->booking_id}}</td>
                            <td>{{date('d-m-Y H:i:s',strtotime($trip->schedule_at))}}</td>
                            @if($trip->service_type)
                                 <td>{{$trip->service_type->name}}</td>
                            @else
                                <td>-</td>
                            @endif
                            <td>@lang('user.paid_via') {{$trip->payment_mode}}</td>
                        </tr>
                        <tr class="hiddencolumns">
                            <td colspan="6">
                                <div class="accordian-body collapse columns" id="trip_{{$trip->id}}">
                                    <div class="column">
                                        <div class="my-trip-left">
                                        <?php 
                                    $map_icon = asset('asset/img/marker-start.png');
                                    $static_map = "https://maps.googleapis.com/maps/api/staticmap?autoscale=1&size=600x450&maptype=terrain&format=png&visual_refresh=true&markers=icon:".$map_icon."%7C".$trip->s_latitude.",".$trip->s_longitude."&markers=icon:".$map_icon."%7C".$trip->d_latitude.",".$trip->d_longitude."&path=color:0x191919|weight:8|enc:".$trip->route_key."&key=".Config::get('constants.map_key'); ?>
                                            <div class="map-static" style="background-image: url({{$static_map}});">
                                                
                                            </div>
                                            <div class="from-to columns no-margin">
                                                <div class="from">
                                                    <h5>@lang('user.from')</h5>
                                                    <p>{{$trip->s_address}}</p>
                                                </div>
                                                <div class="to">
                                                    <h5>@lang('user.to')</h5>
                                                    <p>{{$trip->d_address}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column">

                                        <div class="mytrip-right">
                                             <h5>@lang('user.provider_details')</h5>
                                             <div class="trip-user">
                                                <div class="user-img" style="background-image: url({{img($trip->provider->avatar)}});">
                                                </div>
                                                <div class="user-right">
                                                @if($trip->provider)
                                                    <h5>{{$trip->provider->first_name}} {{$trip->provider->last_name}}</h5>
                                                @endif
                                                    <p>{{$trip->status}}</p>
                                                </div>
                                            </div>

                                            <div class="fare-break">

                                               <form method="POST" action="{{url('cancel/ride')}}">
                                                  {{ csrf_field() }}
                                                     <input type="hidden" name="request_id" value="{{$trip->id}}" />
                                                   <button class="button is-primary fare-btn" type="submit">@lang('user.ride_cancel')</button>
                                               </form>

                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
                @else
                    <hr>
                    <p style="text-align: center;">@lang('user.no_trips')</p>
                @endif
            </div>
        </div>

    </div>
</div>
    </div>
</section>
@endsection
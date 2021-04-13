<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('constants.site_title','Moob Urban') }}</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="{{ config('constants.site_icon') }}" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    @yield('styles')
</head>

<body>

                @yield('content')
                
        <script src="{{asset('js/app.js')}}"></script>

        @if(Setting::get('demo_mode', 0) == 1)
        
        @endif

        <script>
            var map;

            function initMap() {
                var uluru = {lat: 40.730610, lng: -73.935242};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: {lat: 40.730610, lng: -73.935242}
                });
                var contentString = '<div id="content">' +
                        ;

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: 'YOUR_TITLE'
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            }
        </script>

        <script type="text/javascript" src="{{ asset('asset/js/map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7ysJAljkupBFv313yr-zktMOTu4KPtGs&libraries=places&callback=initMap" async defer></script>

        <script type="text/javascript">
            var current_latitude = 40.730610;
            var current_longitude = -73.935242;
        </script>

        <script type="text/javascript">
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                console.log('Sorry, your bcolumnsser does not support geolocation services');
                initMap();
            }

            function success(position)
            {
                document.getElementById('long').value = position.coords.longitude;
                document.getElementById('lat').value = position.coords.latitude

                if (position.coords.longitude != "" && position.coords.latitude != "") {
                    current_longitude = position.coords.longitude;
                    current_latitude = position.coords.latitude;
                }
                initMap();
            }

            function fail()
            {
                // Could not obtain location
                console.log('unable to get your location');
                initMap();
            }
        </script> 

        <script type="text/javascript">
            jQuery(".hamburger.is-closed").click(function () {
                jQuery("#sidebar-wrapper").toggleClass('active');
            });
        </script>

        @yield('scripts')
    </body>
</html>

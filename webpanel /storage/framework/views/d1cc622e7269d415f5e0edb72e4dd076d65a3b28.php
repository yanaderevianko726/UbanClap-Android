<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('constants.site_title','Moob Urban')); ?></title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo e(config('constants.site_icon')); ?>" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>

                <?php echo $__env->yieldContent('content'); ?>
                
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>

        <?php if(Setting::get('demo_mode', 0) == 1): ?>
        
        <?php endif; ?>

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

        <script type="text/javascript" src="<?php echo e(asset('asset/js/map.js')); ?>"></script>
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

        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/user/layout/app.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('constants.site_title','Thinkin Services')}} - @yield('title') - User Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="{{ config('constants.site_icon') }}" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    @yield('styles')
    @livewireStyles
</head>
<body >

    

    {{-- <div class="page-content dashboard-page">    
        <div class="container">
        @php
        $route_name = Request::path();
        $allRouteDialog = config('guidelines.demo_mode_dialog.user');
        $checkRouteDialog = isset($allRouteDialog[$route_name])?"true":"false";
        $tempVar = (Session::get($route_name))?Session::get($route_name):"false";
        if($checkRouteDialog =="true"){
        $dialog = $allRouteDialog[$route_name];
        }
        @endphp

@if($checkRouteDialog =="true")
<div id="demoModeDialog" class="demoModeDialogmodal">
        <div class="demoModeDialogmodal-content text-center">
            <span class="demoModeDialogclose">&times;</span>
            <div class="columns demoModeDialogdis demoModeDialogdis1">
                <p> {!! $dialog !!} </p>
           </div>
         </div>
    </div>
    @endif --}}
    @include('user.include.header')
    <div class="container">
        
    <div class="columns">
        <div class="column is-3 ">
            @include('user.include.nav')
        </div>
        <div class="column is-9 ">
            @yield('content')
        </div>
    </div>
    </div>   
            

        {{-- </div>
    </div> --}}


    @include('user.include.footer')
    <script src="{{asset('js/app.js')}}"></script>
    @if(Setting::get('demo_mode', 0) == 1)
        
        
    @endif
    {{-- @if(($checkRouteDialog =="true") && (Setting::get('demo_mode', 0) == 1) && ($tempVar =="false"))
    {{Session::put($route_name,'true')}}
         <script type="text/javascript">
            var demoModeDialogmodal = document.getElementById('demoModeDialog');
            demoModeDialogmodal.style.display = "block";
            var demoModeDialogspan = document.getElementsByClassName("demoModeDialogclose")[0];
            demoModeDialogspan.onclick = function() 
            {
                demoModeDialogmodal.style.display = "none";
            }
            </script>
    @endif  --}}
    @yield('scripts')
    @livewireScripts

</body>
</html>
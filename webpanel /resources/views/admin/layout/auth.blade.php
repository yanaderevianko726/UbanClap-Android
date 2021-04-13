<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('constants.site_title','Thinki Services')}} - @yield('title') - User Dashboard</title>

        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="shortcut icon" href="{{ config('constants.site_icon') }}" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
    @yield('styles')
</head>
<body style="@media (prefers-color-scheme: dark) ">
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

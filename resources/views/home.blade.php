<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">

    <!-- Styles --> <!-- Material Dashboard 2 -->
    <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">


</head>


<body class="g-sidenav-show bg-gray-100">

    @include('layouts.inc.usersidebar')

    <div class="main-content">


        @include('layouts.inc.adminnav')

        <div class="container">
            @yield('content')
        </div>
    </div>




    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer></script>

    <!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
    <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/plugins/chart.extension.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer></script>

    @yield('scripts')


</body>


</html>

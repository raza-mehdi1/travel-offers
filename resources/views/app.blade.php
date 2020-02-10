<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title Of Site -->
        <title>Travel Offers</title>
        <meta name="description" content="Tour and Travel" />
        <meta name="keywords" content="tour, tour agency, tour operator, tour package, tourism, travel, travel agency, trip, vacation, holiday, travel booking, tour booking, booking, " />
        <meta name="author" content="raza mehdi">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/theme/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/theme/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/theme/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/theme/images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="/theme/images/ico/favicon.png">

        <!-- Font face -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="/theme/font-faces/metropolis/metropolis.css" rel="stylesheet">

        <!-- CSS Plugins -->
        <link href="/theme/css/font-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/theme/bootstrap/css/bootstrap.min.css" media="screen">
        <link href="/theme/css/animate.css" rel="stylesheet">
        <link href="/theme/css/main.css" rel="stylesheet">
        <link href="/theme/css/plugin.css" rel="stylesheet">

        <!-- CSS Custom -->
        <link href="/theme/css/style.css" rel="stylesheet">

        <!-- CSS Custom -->
        <link href="/theme/css/your-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('styles')

    </head>

    <body class="with-waypoint-sticky">

        <!-- start Body Inner -->
        <div class="body-inner">

            @include('partials.header')

            @yield('content')

            @include('partials.footer')

        </div>
        <!-- end Body Inner -->


{{--        @include('partials.login_modal')--}}


        @include('partials.go-to-top')


        <!-- JS -->
        <script type="text/javascript" src="/theme/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="/theme/js/plugins.js"></script>
        <script type="text/javascript" src="/theme/js/custom-core.js"></script>

        @yield('scripts')

    </body>

</html>

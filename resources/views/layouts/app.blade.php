<!DOCTYPE HTML>
<html>
    <head>
        <title>Crayon UGM 2016</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
    
    @yield('content')

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery.scrollex.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery.scrolly.min.js') }}"></script>
            <script src="{{ url('assets/js/skel.min.js') }}"></script>
            <script src="{{ url('assets/js/util.js') }}"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="{{ url('assets/js/main.js') }}"></script>
    </body>
</html>
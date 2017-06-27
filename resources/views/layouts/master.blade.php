<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

</head>
<body data-smooth-scroll-offset="77">

@include('layouts.nav')

<div class="main-container">

    @yield('main')


   @include('layouts.footer')
</div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@yield('scripts')
</body>

</html>

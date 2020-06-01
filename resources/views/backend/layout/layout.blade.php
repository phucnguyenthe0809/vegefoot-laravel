<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin CodeJ</title>
    <base href="{{ asset('backend') }}/">
  @section('css')
    <link href="css/style.css" rel="stylesheet">
  @show
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');

    </script>
</head>

<body class="c-app">
    @include('backend.layout.include.sidebar')
    @include('backend.layout.include.sidebar_right')

    <div class="c-wrapper">
        @include('backend.layout.include.header')
       @yield('main')
       @include('backend.layout.include.footer')
    </div>

    @section('script')
    <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <script>
        new coreui.AsyncLoad(document.getElementById('ui-view'));
        var tooltipEl = document.getElementById('header-tooltip');
        var tootltip = new coreui.Tooltip(tooltipEl);

    </script>
    @show
</body>

</html>

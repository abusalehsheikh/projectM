
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - Pmanage</title>

    <!-- App CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Layout CSS start-->
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- App css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.2.89/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    {{--    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}

    {{--    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

</head>
<body class="fixed-left">

@yield('login')
@yield('register')



<!-- jQuery  -->

<script src="{{ asset('js/app.js')}}"></script>
<!-- jQuery  -->
{{--<script src="assets/js/jquery.min.js"></script>--}}
{{--<script src="assets/js/popper.min.js"></script>--}}
{{--<script src="assets/js/bootstrap.min.js"></script>--}}
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
{{--<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>--}}

<!--Morris Chart-->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- Dashboard init -->
<script src="assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>
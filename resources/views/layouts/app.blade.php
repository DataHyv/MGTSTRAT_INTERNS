<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGT-STRAT</title>
    <link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/pages/auth.css') }}">
    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://kit.fontawesome.com/3557c72a00.js" crossorigin="anonymous"></script>
    {{-- DATEPICKER CSS --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    {{-- TOOLTIP CSS --}}
    <link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">
    {{-- DATEPICKER JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    {{-- TOOLTIP JS --}}
    <script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
    <script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
        padding-left: 2.5rem;
    }

    .asterisk_input::after {
        content: " *";
        color: #e32;
        position: absolute;
        margin: 0px 0px 0px -20px;
        font-size: xx-large;
        padding: 0 5px 0 0;
    }

    .input-icons i {
        position: absolute;
    }

    .input-icons {
        width: 100%;
        margin-bottom: 10px;
    }

    .icon {
        padding: 10px;
        min-width: 40px;
    }
</style>

<body>
    @yield('content')
</body>

</html>

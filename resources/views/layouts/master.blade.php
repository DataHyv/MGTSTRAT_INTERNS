<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MGT-STRAT | @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ URL::to('assets/vendors/simple-datatables/style.css') }}"> --}}


    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/3557c72a00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- Select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
        {{-- DATATABLES --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.13.2/sorting/datetime-moment.js"></script>
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"> --}}


</head>

<body id="body">
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')

    </div>

    {{-- <footer>
        <div class="footer clearfix mb-0 text-muted fixed-bottom p-3 bg-light">
            <div class="text-center text-dark">
                <p><script>document.write(new Date().getFullYear());</script> Copyright &copy; MGT-STRAT</p>
            </div>
        </div>
    </footer> --}}

    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ URL::to('assets/js/main.js') }}"></script>
    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    {{-- <script src="{{ URL::to('assets/vendors/simple-datatables/simple-datatables.js') }}"></script> --}}
    {{-- DATATABLES --}}
    {{-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script> --}}


    <script>
        // Simple Datatable
        // let table1 = document.querySelector('#table1');
        // let dataTable = new simpleDatatables.DataTable('#table1');

        $(document).ready( function () {
            $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
            $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
            $('#table1').dataTable( {
                responsive: true,
                stateSave: true,
                "bScrollCollapse": true,
                "autoWidth": false,
                // "order": [ 9, 'desc' ],
                // "columnDefs": [
                //     { "type": "date", "targets": 9 }
                // ],
                // 'columnDefs': [
                //     {
                //         'searchable'    : false,
                //         'targets'       : [11]
                //     },
                // ],
                stateSaveCallback: function(settings,data) {
                    localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
                    },
                stateLoadCallback: function(settings) {
                    return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
                    },
            } );
        } );
    </script>

    {{-- sweet alert popup message --}}
    @include('sweetalert::alert')
    {{-- script --}}
    @yield('script')


</body>

</html>

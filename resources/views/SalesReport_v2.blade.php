@section('title', 'Sales Report')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
@extends('layouts.master')
<style>
    .pbi-iframe {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

    .pbi-iframe > button {
        position:relative;
        float: right;
        /* right:10px;
        bottom:35px; */
        transition: 0.5s;
        margin: 0px 15px 0px;
    }

    .responsive-iframe {
        position: absolute;
        /* position: relative; */
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
</style>
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">        
        @include('headers.header')
        <div class="page-heading">
            <h3 class="text-uppercase" id="reportTitle"></h3>
        </div>      

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <button type="button" class="btn btn-outline-success d-none" onclick="reloadReport()" id="reload_report"> Reload Report </button>
            <a href="https://app.powerbi.com/Signout" target='_blank' id="logout_pbi">
                <button type="button" class="btn btn-success" onclick="logoutCurrentUser()"> Sign-Out </button>
            </a>
        </div>

        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="pbi-iframe">
                        <iframe title="MgtStrat Sales Report Dashboard" id="embedReport" class="responsive-iframe" src="" frameborder="0" allowFullScreen="true"></iframe>
                        <button class="btn btn-dark btn-sm px-1" onclick="goFullscreen('embedReport'); return false"><i class="fas fa-fw fa-expand"></i> Fullscreen</button>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card-body">
                        <!--Basic Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Full Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" name="fullName"
                                                                value="{{ Auth::user()->name }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Email Address</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ Auth::user()->email }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Mobile Number</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="number" class="form-control"
                                                                value="{{ Auth::user()->phone_number }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Status</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->status }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-bag-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Role Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="{{ Auth::user()->role_name }}" readonly>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-exclude"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end user profile modal --}}
                </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; MGT-STRAT</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var timoutWarning = 150000; // Display warning 150000
        var timoutNow = 30000; // 1000 = 1 Second, 60000 = 1 Minute, 60000 * 3 = 180000 (3 Minutes) 180000
        var warningTimer;
        var timeoutTimer;
        var reportTitle = '';
        var reportSRC = '';
    
        $(document).ready(function() {

            @if ('dashboard-report/sales-report' == request()->path())
                reportTitle = 'Sales Report Dashboard';
                reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=91c53520-da62-4365-9271-9e43e3fe0375&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D';
            @elseif ('dashboard-report/people-and-culture' == request()->path())
                // reportTitle = 'People and Culture Dashboard;'
                // reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=bd4078f0-709b-42a6-aecb-a0e2cab04a76&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f';
                reportTitle = 'Consultant Evaluation';
                reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=256f3643-af1d-40d2-97f0-d9b755a9b275&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f';
            @elseif ('dashboard-report/cash-position-report' == request()->path())
                reportTitle = 'Cash Position Report Dashboard';
                reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=62cab871-abe5-4f53-b6ff-b1ac48d59871&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f';
            @elseif ('dashboard-report/consultant-revenue-report' == request()->path())
                reportTitle = 'Consultant Revenue Report Dashboard';
                reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=d507cf40-4da4-4edc-80fc-fb942de12ca2&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f';
            @elseif ('dashboard-report/peer-dope-report' == request()->path())
                reportTitle = 'Peer Dope Report Dashboard';
                reportSRC = 'https://app.powerbi.com/reportEmbed?reportId=fccd1bb6-1bfe-47f4-b31c-5200a18145db&autoAuth=true&ctid=dd8dd9b8-4c2e-4eba-8bfa-f71866c09e1f';
            @endif
            $('#reportTitle').html(reportTitle);
            document.getElementById('embedReport').src = reportSRC;
            
            StartWarningTimer();
        });
    
        function goFullscreen(id) {
            var element = document.getElementById(id);
            if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
            } else if (element.webkitRequestFullScreen) {
            element.webkitRequestFullScreen();
            }
        }

        function logoutCurrentUser() {
            setTimeout(() => {
                var iframe = document.getElementById('embedReport');
                iframe.src = iframe.src;
            }, 1000);
        }

        // Start warning timer.
        function StartWarningTimer() {
            warningTimer = setTimeout("IdleWarning()", timoutWarning);
        }

        // Reset timers.
        function ResetTimeOutTimer() {
            clearTimeout(timeoutTimer);
            StartWarningTimer();
            // console.log('RESET TIMER');
        }

        // Show idle timeout warning dialog.
        function IdleWarning() {
            clearTimeout(warningTimer);
            timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
            console.log('WARNING');
        }

        // Logout the PBI user.
        function IdleTimeout() {
            console.log('TIME OUT!');
            // document.getElementById('logout_pbi').click();
            // logoutCurrentUser();
            document.getElementById('embedReport').src = '';
            $('#reload_report').removeClass('d-none');
        }

        function reloadReport() {
            document.getElementById('embedReport').src = reportSRC;
            $('#reload_report').addClass('d-none');
        }

        $(document)
        .on('click', ResetTimeOutTimer)
        .on('mousemove', ResetTimeOutTimer);
    </script>
@endsection
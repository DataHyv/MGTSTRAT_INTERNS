<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    {{-- <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
                    <a href="{{ route('home') }}"><img class="img-fluid" src="{{ URL::to('assets/images/logo/main-logo1.png') }}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" id="SidebarHide" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item has-sub {{ Request::routeIs('people-and-culture', 'sales-report', 'cash-position-report' , 'consultant-revenue-report') ? 'active' : '' }}"> --}}
                <li class="sidebar-item has-sub {{ request()->is('dashboard-report/*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Dashboard Report</span>
                    </a>

                    <ul class="submenu {{ request()->is('dashboard-report/*') ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->is('dashboard-report/sales-report') ? 'active' : '' }}">
                            <a href="{{ route('dashboard-report/sales-report') }}">
                                <span>Sales</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ request()->is('dashboard-report/people-and-culture') ? 'active' : '' }}">
                            <a href="{{ route('dashboard-report/people-and-culture') }}">
                                <span>People & Culture</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ request()->is('dashboard-report/cash-position-report') ? 'active' : '' }}">
                            <a href="{{ route('dashboard-report/cash-position-report') }}">
                                <span>Cash Position</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ request()->is('dashboard-report/consultant-revenue-report') ? 'active' : '' }}">
                            <a href="{{ route('dashboard-report/consultant-revenue-report') }}">
                                <span>Consultant Revenue</span>
                            </a>
                        </li>
                        {{-- <li class="submenu-item {{ 'peer-dope-report' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('peer-dope-report') }}">
                                <span>Peer Dope</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>

                {{-- <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name == 'Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name == 'Super Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name == 'Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li> --}}

                @if (Auth::user()->role_name == 'Admin')
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub {{ request()->is('maintenance/*') ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenance</span>
                        </a>
                        <ul class="submenu {{ request()->is('maintenance/*') ? 'active' : '' }}">
                            <li class="submenu-item {{ request()->is('maintenance/user-management', 'maintenance/user-management/*') ? 'active' : '' }}">
                                <a href="{{ route('maintenance/user-management') }}">User Control</a>
                            </li>
                            {{-- <li class="submenu-item {{ request()->is('maintenance/user-activity-log') ? 'active' : '' }}">
                                <a href="{{ route('maintenance/user-activity') }}">User Activity Log</a>
                            </li> --}}
                            <li class="submenu-item {{ request()->is('maintenance/all-user-activity') ? 'active' : '' }}">
                                <a href="{{ route('maintenance/all-user-activity') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="sidebar-item {{ request()->is('change/password') ? 'active' : '' }}">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('clients') ? 'active' : '' }}">
                    <a href="{{ route('clients') }}" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Clients</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('consultant-fees') ? 'active' : '' }}">
                    <a href="{{ url('consultant-fees') }}" class='sidebar-link'>
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Consultant Fees</span>
                    </a>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                {{-- <li class="sidebar-item has-sub {{ Request::routeIs('form/customizedEngagement/new', 'form/f2f_engagement/new', 'form/mgtstratu_workshops/new') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Budget Form</span>
                    </a>
                    <ul class="submenu {{ Request::routeIs('form/customizedEngagement/new', 'form/f2f_engagement/new', 'form/mgtstratu_workshops/new') ? 'active' : '' }}">
                        <li class="submenu-item {{ Request::routeIs('form/customizedEngagement/new') ? 'active' : '' }}">
                            <a href="{{ route('form/customizedEngagement/new') }}">CUSTOMIZED ENGAGEMENT</a>
                        </li>
                        <li class="submenu-item {{ Request::routeIs('form/f2f_engagement/new') ? 'active' : '' }}">
                            <a href="{{ route('form/f2f_engagement/new') }}">F2F ENGAGEMENT</a>
                        </li>
                        <li class="submenu-item {{ Request::routeIs('form/mgtstratu_workshops/new') ? 'active' : '' }}">
                            <a href="{{ route('form/mgtstratu_workshops/new') }}">MGTSTRAT-U WORKSHOPS</a>
                        </li>
                    </ul>
                </li> --}}

                <li class="sidebar-item has-sub {{ request()->is('form/*') ? 'active' : '' }}">

                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>

                    <ul class="submenu {{ request()->is('form/*') ? 'active' : '' }}">

                        <li class="submenu-item {{ request()->is('form/customizedEngagement/*') ? 'active' : '' }}">
                            <a href="{{ route('form/customizedEngagement/detail') }}">Customized Engagement</a>
                        </li>

                        <li class="submenu-item {{ request()->is('form/f2f_engagement/*') ? 'active' : '' }}">
                            <a href="{{ route('form/f2f_engagement/index') }}">F2F Engagement</a>
                        </li>

                        <li class="submenu-item {{ request()->is('form/mgtstratu_workshops/*') ? 'active' : '' }}">
                            <a href="{{ route('form/mgtstratu_workshops/index') }}">MgtStrat-U Workshops</a>
                        </li>

                        <li class="submenu-item {{ request()->is('form/webinars') ? 'active' : '' }}">
                            <a href="{{ url('form/webinars') }}">MgtStrat-U Webinars</a>
                        </li>

                        <li class="submenu-item {{ request()->is('form/coaching') ? 'active' : '' }}">
                            <a href="{{ url('form/coaching') }}">Coaching</a>
                        </li>

                        <li class="submenu-item">
                            <a href="#">SubContracted Work</a>
                        </li>

                    </ul>
                </li>

            </ul>

            {{-- <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li> --}}

        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

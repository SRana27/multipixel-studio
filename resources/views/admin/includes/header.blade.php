<nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <div class="navbar-header">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <!-- Logo icon --><b>
                <img src="{{asset('/')}}website-assets/img/logo.png" alt="homepage" class="light-logo" height="40px" width="70px" />
            </b>
            <!--End Logo icon -->
            <span>
                <!-- Light Logo text -->
                         <img src="{{asset('/')}}website-assets/img/admin-panel.png" class="light-logo" alt="admin-panel" width="100px" height="50px"></span> </a>
    </div>

    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav me-auto">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item">
                <form class="app-search d-none d-md-block d-lg-block">
                    <input type="text" class="form-control" placeholder="Search & enter">
                </form>
            </li>
        </ul>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <ul class="navbar-nav my-lg-0">

            <li class="nav-item dropdown u-pro">
                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('/')}}admin/assets/images/users/admin.jpg" alt="user" class=""> <span class="hidden-md-down">Sohel Rana &nbsp;<i class="ti-angle-down"></i></span> </a>
                <div class="dropdown-menu dropdown-menu-end animated flipInY">
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i class="ti-power-off"></i> Logout</a>
                    <form action="{{route('logout')}}" id="logoutForm" method="post">
                        @csrf
                    </form>

                </div>
            </li>
            <!-- ============================================================== -->
            <!-- End User Profile -->
            <!-- ============================================================== -->
            <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)" title="custom theme"><i class="ti-settings"></i></a></li>
        </ul>
    </div>
</nav>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title> INGOTMahmoudAmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="INGOTMahmoudAmin." name="description" />
    <meta content=" INGOTMahmoudAmin" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/amin.jpg')}}">

    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

</head>


<body data-sidebar="dark">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{'home'}}" class="logo logo-dark">
                            <span class="logo-sm">
                            <img src="{{ URL::asset('assets/images/users') }}/{{(Auth::user()->profile_image)}}" alt="" height="22" class="rounded-circle header-profile-user">
                        </span>
                            <span class="logo-lg">
                            <img src="{{ URL::asset('assets/images/users') }}/{{(Auth::user()->profile_image)}}}" alt="" height="20" class="rounded-circle header-profile-user">
                        </span>
                        </a>

                        <a href="{{'home'}}" class="logo logo-light">
                            <span class="logo-sm">
                            <img src="{{ URL::asset('assets/images/users') }}/{{(Auth::user()->profile_image)}}" alt="" height="22" class="rounded-circle header-profile-user">
                        </span>
                            <span class="logo-lg">
                            <img src="{{ URL::asset('assets/images/users') }}/{{(Auth::user()->profile_image)}}" alt="" height="20" class="rounded-circle header-profile-user">
                        </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">INGOTMahmoudAmin</h4>
                    </div>

                </div>

            

                <div class="d-flex">


                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                    </div>


                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets/images/users') }}/{{(Auth::user()->profile_image)}}"
                            alt="Header Avatar">
                    </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{'profile'}}"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                            Profile</a>
                            <a class="dropdown-item" href="{{'change_password'}}"><i class="dripicons-user font-size-16 align-middle me-2"></i>
                                Change password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                            Logout</a>
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" style="color: lavenderblush">Main</li>

                        <li>
                            <a href="{{'home'}}" class="waves-effect">
                                <i class="dripicons-device-desktop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-title" style="color: lavenderblush">Categories Management</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-blog"></i>
                                <span> Categories </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{'all_category'}}">All Categories</a></li>
                                <li><a href="{{'categories'}}">Add New Categories</a></li>
                            </ul>
                        </li>
                        <li class="menu-title" style="color: lavenderblush">Transactions Management</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-blog"></i>
                                <span>Transactions</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{'transaction'}}">All Transactions</a></li>
                                <li><a href="{{'add_transactions'}}">Add New Transactions</a></li>
                            </ul>
                        </li>
                        <li class="menu-title" style="color: lavenderblush">Form Management</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="dripicons-blog"></i>
                                <span>Referral link</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{'referral'}}">Referral link</a></li>
                                <li><a href="{{'add_link'}}">Add New Referral link</a></li>
                                <li><a href="{{'user_list'}}">Users list </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

       @yield('content')
        

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Demo</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

              

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

</body>

</html>
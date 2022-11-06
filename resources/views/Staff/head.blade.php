<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="MA.">
<title>INGOTMahmoudAmin</title>
<link rel="icon" href="{{ URL::asset('assets/images/amin.jpg') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ URL::asset('assets3/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets3/plugins/morrisjs/morris.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets3/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{ URL::asset('assets3/css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets3/css/color_skins.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets3/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ URL::asset('assets/images/logo/Untitled.png') }}" width="48" height="48"></div>
        <p>Please wait...</p>        
    </div>
</div>

<div class="overlay"></div>

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
        </li>
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>            
           
        </li>
        {{-- <li><a href="{{url('staff/profile')}}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>         --}}
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="dripicons-exit font-size-16 align-middle me-2"></i>
            <i class="zmdi zmdi-power"></i></a></li>
    </ul>    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">

                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 
  
    
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>        
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>                   
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>                    
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>                    
                            </li>
                        </ul>
                    </div>
                </div>                
                
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>               
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="{{url('staff')}}"><img src="{{ URL::asset('assets/images/users/amin.jpg') }}" alt="User" width="65px"></a>
                        </div>
                        <div class="detail">
                            <h6>INGOTMahmoudAmin</h6>
                            
                           
                        </div>
                    </div>
                </li>
                <li class=""> <a href="{{ url('staff') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li class=""> <a href="{{ url('staff/users') }}"><i class="zmdi zmdi-accounts"></i><span>Users</span></a></li>
               
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    
@yield('contant')        

</section>
<!-- Jquery Core Js -->
<script src="{{ URL::asset('assets3/bundles/libscripts.bundle.js') }}"></script> 
<script src="{{ URL::asset('assets3/bundles/vendorscripts.bundle.js') }}"></script> 

<script src="{{ URL::asset('assets3/bundles/knob.bundle.js') }}"></script>
<script src="{{ URL::asset('assets3/bundles/jvectormap.bundle.js') }}"></script> 
<script src="{{ URL::asset('assets3/bundles/morrisscripts.bundle.js') }}"></script> 
<script src="{{ URL::asset('assets3/bundles/sparkline.bundle.js') }}"></script>
<script src="{{ URL::asset('assets3/bundles/doughnut.bundle.js') }}"></script>

<script src="{{ URL::asset('assets3/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ URL::asset('assets3/js/pages/index.js') }}"></script>

<script src="{{ URL::asset('assets3/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ URL::asset('assets3/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets3/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets3/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets3/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets3/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets3/js/pages/tables/jquery-datatable.js') }}"></script>



</body>
</html>

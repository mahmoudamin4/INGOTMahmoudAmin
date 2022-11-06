@extends('Staff.head')

@section('contant')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Staff</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="{{url('staff')}}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>                       
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-accounts zmdi-hc-3x col-amber"></i></p>
                        <span>Users</span>
                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{$UsersCount}}" data-speed="2000" data-fresh-interval="700">{{$UsersCount}}</span></h3>                      
                    </div>
                </div>
            </div>       
        </div>                       
    </div>

    @endsection
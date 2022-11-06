@extends('Staff.head')

@section('contant')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Staff</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="{{url('staff')}}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item active">Updata Account</li>
                    </ul>
                </div>            
             
                
            </div>
        </div>
        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Updata</h2>
                            </div>
                            @foreach($user_data as $user_data)
                            <input type="text" name="id" form="form1" value="{{ $user_data->id }} " style="display: none">

                            <div class="body">
                                <div class="row clearfix">
                                    <form class="row g-3" id="form1" action="{{url('updata-user')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Fname" value="{{ $user_data->name }} " required>
                                        </div>
                                    </div>                                   
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">E-mail</label>
                                            <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ $user_data->email }} " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="{{ $user_data->mobile }} " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Wallet</label>
                                            <input type="text" class="form-control" placeholder="wallet" name="wallet" value="{{ $user_data->wallet }} " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Number of referred</label>
                                            <input type="text" class="form-control" placeholder="Number of referred"  value="{{$numberuser}}" readonly style="background-color: cadetblue;color: #000;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Total expenses</label>
                                            <input type="text" class="form-control" placeholder="Total expenses"  value="{{$expenses}}" readonly style="background-color: cadetblue;color: #000;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file" class="form-control"  name="pro-image" oninput="pic.src=window.URL.createObjectURL(this.files[0])" required>
                                        </div>
                                        <center> <img id="pic" style="width:320px;" /> </center>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach 
                        </div>   
   
        
                
    </div>

    


    @endsection
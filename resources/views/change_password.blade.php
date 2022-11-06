@extends('base/layout')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">CHANGE PASSWORD</h4>
                            

                            <form class="row g-3" id="form1" action="{{url('update_password')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Old Password</label>
                                    <input  type="password" placeholder="Enter old password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword">
                                    @error('oldpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">New Password</label>
                                    <input  type="password" placeholder="Enter New Password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword">
                                    @error('newpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Password Confirm</label>
                                    <input  type="password" placeholder="Enter Password Confirm" class="form-control @error('passwordconfi') is-invalid @enderror"  name="passwordconfi">
                                    @error('passwordconfi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                               

                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-pink waves-effect waves-light">
                                            Submit
                                        </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <span class="d-none d-sm-inline-block"> 
                                 <i class="mdi mdi-heart text-danger"></i> by MA.</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        @endsection
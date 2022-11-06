@extends('base/layout')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Profile</h4>
                            @foreach($profile_data as $profile_data)
                            <input type="text" name="id" form="form1" value="{{ $profile_data->id }} " style="display: none">

                            <form class="row g-3" id="form1" action="{{url('updata-profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                    <input class="form-control" type="text" value="{{ $profile_data->name }}" id="example-text-input" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                                    <input class="form-control" type="email" value="{{ $profile_data->email }}" id="example-text-input" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Mobile</label>
                                    <input class="form-control" type="text" value="{{ $profile_data->mobile }}" id="example-text-input" name="mobile">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Birthdate</label>
                                        <input class="form-control" type="date" value="{{ $profile_data->birthdate }}" id="example-text-input" name="birthdate">                                   
                                </div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Wallet</label>
                                    <input class="form-control" type="text" value="{{ $profile_data->wallet }}" id="example-text-input" name="wallet" readonly>
                                </div>
                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-pink waves-effect waves-light">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="filestyle" data-buttonname="btn-secondary" form="form1" name="pro-image" required>
                            </div>
                           
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
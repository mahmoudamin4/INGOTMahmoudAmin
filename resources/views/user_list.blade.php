@extends('base/layout')

@section('content')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Users list </h4>
                                    <p class="card-title-desc" style="color: red">Number Of User : {{$numberuser}}</p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($user as $user)
                                            <tr>
                                                <td>{{ $user->id  }}</td>
                                                <td>{{ $user->name  }}</td>
                                                <td>{{ $user->email  }}</td>
                                                <td>{{ $user->mobile  }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

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
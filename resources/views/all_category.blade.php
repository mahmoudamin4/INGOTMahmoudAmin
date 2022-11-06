@extends('base/layout')

@section('content')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="card-title">All Category</h4>
                                    <p class="card-title-desc" style="color: red">Number Of Categories : {{$numbercategory}}</p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($category as $category)
                                            <tr>

                                                <td>{{ $category->name }}</td>
                                                <td>
                                                <div class="row icon-demo-content">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6" >
                                                        <a href="{{ url('all_category/edit') }}/{{ $category->category_id }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit" aria-label="Edit" >  <i class="ion ion-ios-create"></i> </a>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6" >
                                                        <a href="{{ url('category/settings/'.$category->category_id ) }}" onclick="return confirm('Are you sure you want to delete {{ $category->name }}?');" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Delete" aria-label="Delete">  <i class="ion ion-md-close-circle-outline"></i> </a>
                                                    </div>
                                                </div>
                                                </td>
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
                                 <i class="mdi mdi-heart text-danger"></i> by  MA.</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        @endsection
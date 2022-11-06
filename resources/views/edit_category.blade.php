@extends('base.layout2')

@section('content')



 <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach($category_details as $category_details)
                            <input type="text" name="categoryID" form="form1"  value="{{ $category_details->category_id }}" style="display: none">

                            <h4 class="card-title">Update Category </h4>
                            <form class="row g-3" id="form1" action="{{url('updata-category')}}" method="post"  class="custom-validation">
                                @csrf
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Category Name</label>
                                    <div>
                                        <input type="text" class="form-control"   name="category_name" value="{{$category_details->name}}">
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                      
                                    </div>
                                </div>
                            </form>
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
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
 @endsection
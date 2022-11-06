 @extends('base.layout')

 @section('content')


 <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="card-title"> Add New Transactions </h3>
                            
                            <form class="row g-3" id="form1" action="{{url('new-transaction')}}" method="post" enctype="multipart/form-data" class="custom-validation">
                                @csrf
                                <div class="mb-3 position-relative">
                                    <label class="form-label">User Mobile Number</label>
                                    <div>
                                        <input type="text" class="form-control"  placeholder="User Mobile Number" required name="recipient-number" />
                                    </div>
                                </div>

                                <div class="mb-3 position-relative">
                                    <label class="form-label">Category</label>
                                    <div>
                                        <select class="form-control show-tick" name="category" required>
                                            <option  selected disabled>Select</option>
                                              @foreach($cate as $cate)
                                              <option value="{{$cate->name }}">{{$cate->name }}</option>
                                              @endforeach
                                          </select>
                                    </div>
                                </div>

                                <div class="mb-3 position-relative">
                                    <label class="form-label">Note</label>
                                    <div>
                                        <input type="text" class="form-control"  placeholder="Note" required name="note" />
                                    </div>
                                </div>

                                <div class="mb-3 position-relative">
                                    <label class="form-label">Amount (JOD)</label>
                                    <div>
                                        <input type="number" min="1" step="1"  class="form-control"  placeholder="Amount" required name="amount" />
                                    </div>
                                </div>
                               

                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Transfer
                                    </button>
                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
</div> @endsection
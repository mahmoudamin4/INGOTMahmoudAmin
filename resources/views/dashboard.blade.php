 @extends('base/layout')

 @section('content')


 <div class="main-content">
    <div class="page-content">
        <div class="header-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4 pt-5">
                        <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>


                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card text-center">
                        <div class="mb-2 card-body text-muted">
                            <h3 class="text-purple mt-2">{{$transactionsCount}}</h3> Number Of Transactions
                        </div>
                    </div>
                </div>  
                <div class="col-md-12 col-xl-12">
                    <div class="card text-center">
                        <div class="mb-2 card-body text-muted">
                            <h3 class="text-purple mt-2">{{$amount}}</h3> Total expenses
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
                         <i class="mdi mdi-heart text-danger"></i> by MA.</span>
                </div>
            </div>
        </div>
    </footer>
</div> @endsection
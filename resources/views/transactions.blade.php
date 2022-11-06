@extends('base.layout')

@section('content')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Transactions</h4>
                                    <p class="card-title-desc">Show Transactions 
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>                                            
                                            <tr>
                                                <th>#</th>
                                                <th>Recipient Id</th>
                                                <th>Amount (Balance)</th>
                                                <th>Note</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transaction as $transaction)
                                            <tr>
                                                <td>{{$transaction->id}}</td>
                                                <td>{{$transaction->recipient_id}}</td>
                                                <td>{{$transaction->amount}} JOD</td>
                                                <td>{{$transaction->note}}</td>
                                                <td>{{$transaction->category}}</td>
                                                <td>{{$transaction->created_at}}</td>
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
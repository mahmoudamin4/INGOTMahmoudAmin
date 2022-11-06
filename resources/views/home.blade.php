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
               <div class="col-xl-12">
                   <div class="card">
                       <div class="card-body">
                           <h4 class="card-title mb-4">Latest Transactions</h4>

                           <div class="table-responsive">
                               <table class="table mt-4 mb-0 table-centered table-nowrap">

                                   <tbody>
                                       {{-- @foreach($products as $products)
                                       <tr>
                                           <td>
                                               <img src="assets/images/users/amin.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Mahmoud Amin
                                           </td>
                                           <td>{{ $products->name }}</td>
                                           <td>{{ $products->price }}</td>
                                           <td>{{ $products->created_at }} </td>
                                           <td>{{ $products->state }}</td>
                                       </tr>
                                       @endforeach --}}
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>


           </div>
           <!-- end row -->


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
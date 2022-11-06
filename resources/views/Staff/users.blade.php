@extends('Staff.head')

@section('contant')


<div class="container-fluid">

  <div class="block-header">
    <div class="row clearfix">
      <div class="col-lg-5 col-md-5 col-sm-12">
        <h2>Staff</h2>
        <ul class="breadcrumb padding-0">
          <li class="breadcrumb-item"><a href="{{url('staff')}}"><i class="zmdi zmdi-home"></i></a></li>
          <li class="breadcrumb-item active">Users</li>
        </ul>
      </div>


    </div>
  </div>


  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <h5 class="mb-0">Users</h5>


      </div>
      <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
          
          <thead class="table-secondary">
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Name</th>
              <th>Number of referred</th>
              <th>Email</th>
              <th>Wallet balance</th>
              <th>Registered Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user_data as $user_data)
            <tr>
              <td>{{ $user_data->id }}</td>
              <td>
                <div class="d-flex align-items-center gap-3 cursor-pointer">
                  <img src="{{ URL::asset('assets/images/users') }}/{{ $user_data->profile_image }}" class="rounded-circle" width="44" height="44" alt="">

                </div>
              </td>
              <td>{{ $user_data->name }}</td>
              <td><a href="{{url('staff/users/edit_user')}}/{{$user_data->id}}" >
                <button class="btn btn-info btn-icon  btn-icon-mini btn-round">
                  <i class="zmdi zmdi-eye"></i>
                </button>
                </a></td>
              <td>{{ $user_data->email }}</td>
              <td><a href="{{url('staff/users/edit_user')}}/{{$user_data->id}}" >
                <button class="btn btn-danger btn-icon  btn-icon-mini btn-round">
                  <i class="zmdi zmdi-eye"></i>
                </button>
                </a></td>
              <td>{{ date('d-m-Y', strtotime($user_data->created_at)) }}</td>
              <td>
                <div class="table-actions d-flex align-items-center gap-3 fs-6">
              <a href="{{url('staff/users/edit_user')}}/{{$user_data->id}}" >
                  <button class="btn btn-info btn-icon  btn-icon-mini btn-round">
                    <i class="zmdi zmdi-edit"></i>
                  </button>
                  </a>
                  
              <a href="{{url('/delete_users/'.$user_data->id)}}" onclick="return confirm('Are you sure you want to delete ?');">
                  <button class="btn btn-danger btn-icon  btn-icon-mini btn-round">
                    <i class="zmdi zmdi-delete"></i>
                  </button>
</a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
          
        </table>
      </div>
    </div>
  </div>
</div>


@endsection
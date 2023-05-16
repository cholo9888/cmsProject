@extends('layouts.admin')
@section('content')
<div class="card mt-3">

    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
        user Management
      </h3>
      <div class="card-tools">
        <a href="{{url('add_user')}}" class="btn btn-sm btn-success">
            Register
            </a>

    </div>
    </div><!-- /.card-header -->
    <div class="card-body">
        <table id="report" class="table table-sm table-bordered table-striped">
            <thead>
            <tr>
              <th>S/N</th>
              <th>Operator Name</th>
              <th>Username</th>
              {{-- <th>Password</th> --}}
              <th>Role</th>
              <th>Created_at</th>
              {{-- <th>Action</th> --}}
            </tr>
            </thead>
            <tbody>

                @foreach ($users as $key=>$user)


            <tr>

                <td>{{ $key}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              {{-- <td>{{$user->password}}</td> --}}
              <td> {{$user->is_admin}}</td>
              <td>{{$user->created_at}}</td>
              {{-- <td><a type="submit" class="btn btn-primary btn-sm" href="{{url('final/'.$user->id)}}">
                <i class="fas fa-folder">
                </i>
                View
               </a>
             </td> --}}
            </tr>
            @endforeach
            </tbody>

          </table>

      </div>

    </div><!-- /.card-body -->

@endsection


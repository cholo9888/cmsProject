@extends('layouts.admin')
@section('content')
<div class="card mt-3">
    <div class="card-body">
      <div class="tab-content p-0 mt-4">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">User</span>
                  <span class="info-box-number">10</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-file"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Reports</span>
                  <span class="info-box-number">410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-vehicle"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Machine</span>
                  <span class="info-box-number">13</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>

      </div>

    </div><!-- /.card-body -->

  </div>
<div class="card mt-3">

    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
        Employers Daily Reports
      </h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <table id="report" class="table table-sm table-bordered table-striped">
            <thead>
            <tr>
              <th>S/N</th>
              <th>Operator Name</th>
              <th>Shift</th>
              <th>Machine</th>
              <th>Fuel</th>
              <th>Date</th>
              <th>Sign In</th>
              <th>Sign Out</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($employers as $key=>$employer)


            <tr>

                <td>{{ $key}}</td>
              <td>{{$employer->operator_name}}</td>
              <td>{{$employer->shift}}</td>
              <td>{{$employer->machine_name}}</td>
              <td> {{$employer->fuel}}</td>
              <td>{{$employer->created_at}}</td>
              <td>{{$employer->start}}</td>
              <td>{{$employer->end}}</td>
              <td><a type="submit" class="btn btn-primary btn-sm" href="{{url('final/'.$employer->id)}}">
                <i class="fas fa-folder">
                </i>
                View
               </a>
             </td>
            </tr>
            @endforeach
            </tbody>

          </table>

      </div>

    </div><!-- /.card-body -->

@endsection


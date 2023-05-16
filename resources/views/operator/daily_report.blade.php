@extends('layouts.app')
@section('content')
<br>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">OPORETOR DAILY REPORT</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-sm table-bordered table-striped">
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
            @foreach ($reports as $key => $report)

        <tr>
            <td>{{$key}}</td>
          <td>{{$report->operator_name}}</td>
          <td>{{$report->shift}}</td>
          <td>{{$report->machine_name}}</td>
          <td> {{$report->fuel}}</td>
          <td>{{$report->created_at}}</td>
          <td>{{$report->start}}</td>
          <td>{{$report->end}}</td>
          <td><a type="submit" class="btn btn-primary btn-sm" href="{{url('show/'.$report->id)}}">
            <i class="fas fa-folder">
            </i>
            View
           </a>
         </td>
        </tr>
        </tbody>
        @endforeach
      </table>
      {{$reports->links()}}
    </div>
    <!-- /.card-body -->
  </div>

@endsection

@extends('layouts.app')
@section('content')
<br>
<div class="card mt-3">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
        Operator Sign In Information Form
      </h3>
      <div class="card-tools">
        {{-- <ul class="nav nav-pills ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
          </li>
        </ul> --}}
      </div>
    </div><!-- /.card-header -->
    <div class="card-body">

        {{-- @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif --}}
      <div class="tab-content p-0 mt-4">
        <form action="{{url('store')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Operator Name</label>
                <input style="background-color: white" class="form-control" type="text" name="operator_name" placeholder="Operator name" value="{{Auth::user()->name}}" readonly>
              </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Machine Name</label>
                  <select name="machine_name" id="parent_selection" class="form-control">
                    <option value="">-- Please Select --</option>
                    <option value="DT1">DT1</option>
                    <option value="DT2">DT2</option>
                    <option value="DT3">DT3</option>
                    <option value="DT4">DT4</option>
                    <option value="DT5">DT5</option>
                    <option value="DT6">DT6</option>
                    <option value="DT7">DT7</option>
                    <option value="DT8">DT8</option>
                    <option value="DT9">DT9</option>
                    <option value="DT10">DT10</option>
                    <option value="EX1">EX1</option>
                    <option value="EX2">EX2</option>
                    <option value="EX3">EX3</option>
                    <option value="EX4">EX4</option>
                    <option value="EX5">EX5</option>
                    <option value="WL1">WL1</option>
                    <option value="WL2">WL2</option>
                    <option value="WL3">WL3</option>
                    <option value="WL4">WL4</option>
                    <option value="WL5">WL5</option>
                    <option value="DZ1">DZ1</option>
                    <option value="DZ2">DZ2</option>
                    <option value="GRADDER">GRADDER</option>
                    <option value="T3W">T3W</option>
                    <option value="L8">L8</option>
                    <option value="SANDVICK">SANDVICK</option>
                    <option value="ROLLER">ROLLER</option>
                    <option value="FORK LIFT">FORK LIFT</option>
                </select>
                  @error('machine_name') <span class="text-red text-sm">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label>Machine Capacity</label>
                  <select name="capacity" id="child_selection" class="form-control" style="background-color: white">
                  </select>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label>Fuel</label>
                  <input class="form-control form-control" type="text" name="fuel" placeholder="Fuel in LTR" >
                  @error('fuel') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Shift</label>
                  <select class="form-control  select2" style="width: 100%;" name="shift">
                    <option selected="selected" disabled>Select Shift</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>
                  @error('shift') <span class="text-red text-sm">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Start</label>
                  <div class="input-group date" id="timepicker" data-target-input="nearest">
                    <input type="text" class="form-control "  name="start" />
                    <div class="input-group-append"  data-toggle="datetimepicker">
                        <div class="input-group-text" style="background-color: white"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                    @error('start') <span class="text-red text-sm">{{ $message }}</span> @enderror
                </div>
              </div>

              {{-- <div class="col-md-4">
                <div class="form-group">
                  <label>End</label>
                  <div class="input-group date" id="timepickerr" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#timepickerr" required/>
                    <div class="input-group-append" data-target="#timepickerr" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    </div>
                </div>
              </div> --}}
      </div>
      <div class="card-footer mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit Sign In Information</button>
      </div>
    </form>
      </div>

    </div><!-- /.card-body -->

  </div>
  {{-- <div class="card">
    <div class="card-header">
      <h3 class="card-title">Condensed Full Width Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-sm text-center">
        <thead>
          <tr>
            <th>#</th>
            <th>Operator Name</th>
            <th>Machine</th>
            <th>Fuel</th>
            <th>Shift</th>
            <th>Start</th>
            <th>TimeStamp</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table text-center ">
          <tr>
            <td>1.</td>
            <td>Nasoro</td>
            <td>TD1</td>
            <td>500</td>
            <td>Start</td>
            <td>4:20pm</td>
            <td>12/22/2020</td>
            <td>
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    Continue
                </a>
            </td>

          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div> --}}
  <!-- /.card -->
</div>
@endsection

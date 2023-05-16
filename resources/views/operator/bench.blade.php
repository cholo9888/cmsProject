@extends('layouts.app')
@section('content')
    <div class="card " style="margin-top: 20px!imporatant">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Operator Information
            </h3>
        </div><!-- /.card-header -->
        @foreach ($machine as $machin)
            <div class="card-body">
                <div class="tab-content p-0 mt-1">
                    <form action="{{ url('report') }}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="text" name="checkup_id" value="{{ $machin->machine_id }}" hidden>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Operator Name</label>
                                    <input class="form-control form-control-sm" type="text" readonly
                                        style="background-color: white" name="operator_name" placeholder="Operator name"
                                        value="{{ $machin->operator_name }}">
                                    @error('name')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Machine Name</label>
                                    <input class="form-control form-control-sm" type="text" readonly
                                        style="background-color: white" name="machine_name" placeholder="Operator name"
                                        value="{{ $machin->machine_name }}">
                                    @error('name')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Capacity</label>
                                    <input class="form-control form-control-sm limestone" type="text" readonly
                                        style="background-color: white"  placeholder="Operator name"
                                        value="{{ $machin->capacity }}" name="capacity" id="capacity"  oninput="add_number()">
                                    @error('name')
                                        <span class="text-red-400 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fuel</label>
                                    <input readonly style="background-color: white" class="form-control form-control-sm"
                                        type="text" name="fuel" placeholder="Fuel in LTR" value="{{ $machin->fuel }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Shift</label>
                                    <input readonly style="background-color: white" class="form-control form-control-sm"
                                        type="text" name="shift" placeholder="Fuel in LTR"
                                        value="{{ $machin->shift }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Start</label>
                                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input readonly style="background-color: white" type="text"
                                            class="form-control form-control-sm datetimepicker-input"
                                            data-target="#timepicker" value="{{ $machin->start }}" name="start" />
                                        <div class="input-group-append" data-target="#timepicker"
                                            data-toggle="datetimepicker" >
                                            <div class="input-group-text"  style="background-color: white"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>End</label>
                                    <div class="input-group date" data-target-input="nearest">
                                        <input type="text" class="form-control form-control-sm datetimepicker-input"
                                             name="end" />
                                        <div class="input-group-append" data-target="#timepickerr"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"  style="background-color: white"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    @error('end')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>TimeStamp</label>
                                    <div class="input-group date" id="timepickerr" data-target-input="nearest">
                                        <input style="background-color: white" type="text"
                                            class="form-control form-control-sm datetimepicker-input"
                                            data-target="#timepickerr" readonly value="{{ $machin->created_at }}" />
                                        <div class="input-group-append" data-target="#timepickerr"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"  style="background-color: white"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-car mr-1"></i>
                                <b> LIMESTONE & RED SOIL TRIPS</b>
                            </h3>
                        </div><!-- /.card-header --> --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text input-group-sm"  style="background-color: white">
                                                B1
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-sm amount"
                                             name="b1" id="b1">

                                        <div class="input-group-append"  style="background-color: white">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b1')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                B2
                                            </span>
                                        </div>
                                        <input type="text" class="form-control amount" name="b2"
                                          id="b2">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b2')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                B3
                                            </span>
                                        </div>
                                        <input type="text" class="form-control amount"
                                            name="b3"  id="b3">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b3')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                B4
                                            </span>
                                        </div>
                                        <input type="text" class="form-control amount"
                                            name="b4"  id="b4">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b4')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                B5
                                            </span>
                                        </div>
                                        <input type="text" class="form-control amount" name="b5"
                                             id="b5">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b5')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Benches</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                B6
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="b6"
                                          id="b6">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('b6')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Benches Trip</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: white;color:brown">
                                                Total
                                            </span>
                                        </div>
                                        <input type="number" class="form-control limestone"
                                            name="totalordercost" id="totalBench"  readonly
                                            style="color:blue;background-color:white">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Red Soil</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-danger">
                                            </span>
                                        </div>
                                        <input type="text" name="red" class="form-control trips"
                                            id="red">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                    @error('red')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Trip</label>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="background-color: white">
                                                Total
                                            </span>
                                        </div>
                                        <input type="number" class="form-control trip" name="total" id="total"
                                            readonly style="color:blue;background-color:white">
                                        <div class="input-group-append">
                                            <div class="input-group-text"  style="background-color: white"><i class="fas fa-ambulance">Trips</i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: white;color:brown">
                                                TOTAL TONNAGE OF LIMESTONE
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" id="nasoro" name="limestone_toonage"
                                            readonly style="color:blue;background-color:white" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: white;color:brown">
                                                TOTAL TONNAGE OF REDSOIL
                                            </span>
                                        </div>
                                        <input type="number" class="form-control " name="redsoil_tonage" id="redTonage"
                                            readonly style="color:blue;background-color:white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color: white;color:brown">
                                                GRAND TOTAL TONNAGE
                                            </span>
                                        </div>
                                        <input type="number" class="form-control trip" name="grand_total" id="grand"
                                            readonly style="color:blue;background-color:white">
                                    </div>
                                </div>
                            </div>
                            <input type="text" value="bench" name="status" hidden>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Click To
                                Save</button>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#modal-lg">
                                <i class="fas fa-eye"></i>Machine CheckUp
                            </button>
                        </div>

                    </form>
                </div>
            </div><!-- /.card-body -->


            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" style="font-size: 15px">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="card-title">
                                <i class="fas fa-car mr-1"></i>
                                <b> MACHINE CHECKUP FORM</b>
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body table-responsive p-0">
                                <form action="{{ url('machineCheck') }}" method="POST">
                                    @csrf
                                    <table class="table table-head-fixed text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th>Parameter</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                {{-- @foreach ($operator as $op)
                    <td ><input type="text" value="{{$op->id}}" name="machine_id" hidden></td>
                    @endforeach --}}

                                            </tr>
                                            <tr>
                                                <td>Walk around the machine/Zunguka machine</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r1 }}</span>
                                                </td>

                                            <tr>
                                                <td>Check for any damage,loose nut,pins,leakage,etc/
                                                    Kagua tofauti zilizopo, uharibifu,nati zilizolegea, nk</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r2 }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Engine coolant level/kiasi cha maji kwenye rejeta</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r3 }}</span>
                                                </td>
                                            </tr>
                                            </tr>

                                            <tr>
                                                <td>Engine oil level/ kiasi cha injini oil</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r4 }}</span>
                                                </td>
                                            </tr>
                                            </tr>

                                            <tr>
                                                <td>Transmission oil level/kiasi cha oil ya gia box</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r5 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Diesel level/Ujazo wa Dizeli</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r6 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Air filter/filter za upepo</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r7 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check tyre's air pressure/ Angalia upepo wa matairi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r8 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Start engine/ Washa mashine</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r9 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check cabin/Angalia vitu vyote kwenye cabin,vioo,gages,first aid kit,
                                                    seat belt etc</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r10 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Brake air pressure/ upepo wa breki</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r11 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Engine oil temperature/Joto la oil ya injini</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r13 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Coolant temperature/ Joto la maji ya rejeta</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r14 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check horn/ kagua honi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r15 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Back-up alarm/ Honi ya kurudi nyuma</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r16 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check lights/ kagua taa</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r17 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check wipers/ kagua waipa</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r18 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check steering system/ kagua mfumo wa usukani.</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r19 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check brake system/ Kagua mfumo wa breki</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r20 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check track chain/ Kagua cheni za track</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r21 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check track roller/ Kagua rola za track</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r22 }}</span>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>Check sprockets/ Kagua sproketi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r23 }}</span>
                                                </td>
                                            <tr>
                                                <td>Check idlers/ Kagua idla</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r24 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check fire extinguisher/ Kagua kizima moto</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $machin->r25 }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
        @endforeach
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
@endsection

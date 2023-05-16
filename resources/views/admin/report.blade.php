@extends('layouts.app')
@section('content')
    @foreach ($report as $repor)
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i>Willy Enterprises Ltd
                                        <small class="float-right">Date:{{ $repor->created_at }}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-2 invoice-col">
                                    <address>
                                        <strong>Employer Name</strong><br>
                                        {{ $repor->operator_name }}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-2 invoice-col">
                                    <address>
                                        <strong>Machine Name</strong><br>
                                        {{ $repor->machine_name }}
                                    </address>
                                </div>
                                <div class="col-sm-1 invoice-col">
                                    <address>
                                        <strong>Capacity</strong><br>
                                        {{ $repor->capacity }}
                                    </address>
                                </div>
                                <div class="col-sm-2 invoice-col">
                                    <address>
                                        <strong>Fuel</strong><br>
                                        {{ $repor->fuel }}
                                    </address>
                                </div>
                                <div class="col-sm-2 invoice-col">
                                    <address>
                                        <strong>Shift</strong><br>
                                        {{ $repor->shift }}
                                    </address>
                                </div>
                                <div class="col-sm-1 invoice-col">
                                    <address>
                                        <strong>Fuel </strong><br>
                                        {{ $repor->fuel }}
                                    </address>
                                </div>
                                <div class="col-sm-1 invoice-col">
                                    <address>
                                        <strong>Start </strong><br>
                                        {{ $repor->start }}
                                    </address>
                                </div>
                                <div class="col-sm-1 invoice-col">
                                    <address>
                                        <strong>End</strong><br>
                                        {{ $repor->end }}
                                    </address>
                                </div>
                            </div>
                            <!-- /.row -->
                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-head-fixed text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th>Parameter</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td>Walk around the machine/Zunguka machine</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r1 }}</span>
                                                </td>

                                            <tr>
                                                <td>Check for any damage,loose nut,pins,leakage,etc/
                                                    Kagua tofauti zilizopo, uharibifu,nati zilizolegea, nk</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r2 }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Engine coolant level/kiasi cha maji kwenye rejeta</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r3 }}</span>
                                                </td>
                                            </tr>
                                            </tr>

                                            <tr>
                                                <td>Engine oil level/ kiasi cha injini oil</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r4 }}</span>
                                                </td>
                                            </tr>
                                            </tr>

                                            <tr>
                                                <td>Transmission oil level/kiasi cha oil ya gia box</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r5 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Diesel level/Ujazo wa Dizeli</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r6 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Air filter/filter za upepo</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r7 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check tyre's air pressure/ Angalia upepo wa matairi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r8 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Start engine/ Washa mashine</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r9 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check cabin/Angalia vitu vyote kwenye cabin,vioo,gages,first aid kit,
                                                    seat belt
                                                    etc</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r10 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Brake air pressure/ upepo wa breki</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r11 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Engine oil temperature/Joto la oil ya injini</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r13 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Coolant temperature/ Joto la maji ya rejeta</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r14 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check horn/ kagua honi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r15 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Back-up alarm/ Honi ya kurudi nyuma</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r16 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check lights/ kagua taa</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r17 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check wipers/ kagua waipa</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r18 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>check steering system/ kagua mfumo wa usukani.</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r19 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check brake system/ Kagua mfumo wa breki</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r20 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check track chain/ Kagua cheni za track</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r21 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check track roller/ Kagua rola za track</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r22 }}</span>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>Check sprockets/ Kagua sproketi</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r23 }}</span>
                                                </td>
                                            <tr>
                                                <td>Check idlers/ Kagua idla</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r24 }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Check fire extinguisher/ Kagua kizima moto</td>
                                                <td>
                                                    <span class="badge bg-primary">{{ $repor->r25 }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            @php
                                $status = $repor->status;

                            @endphp
                            @if ($status == 'bench')
                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Limestone & Red Soil Trips</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Benches</th>
                                                            <th>Trips</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>B1</td>
                                                            <td>{{ $repor->b1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B2</td>
                                                            <td>{{ $repor->b2 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B3</td>
                                                            <td>{{ $repor->b3 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B4</td>
                                                            <td>{{ $repor->b4 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B5</td>
                                                            <td>{{ $repor->b5 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>B6</td>
                                                            <td>{{ $repor->b6 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Red Soil</td>
                                                            <td>{{ $repor->red }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        {{-- <p class="lead">BENCHES TRIPS</p> --}}

                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <tr>
                                                    <th style="width:50%">Total limestone:</th>
                                                    <td>{{ $repor->totalordercost }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Red Soil</th>
                                                    <td>{{ $repor->red }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Trip</th>
                                                    <td>{{ $repor->total }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Limestone Tonage</th>
                                                    <td>{{ $repor->limestone_toonage }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Red Soil Tonage</th>
                                                    <td>{{ $repor->redsoil_tonage }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Grand Total</th>
                                                    <td>{{ $repor->grand_total }}</td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <strong>Supervisor Name:_____________________________ <span> </span>Signature:______________________</strong>
                                <button type="button" class="btn btn-success btn-sm float-right m-1" onclick="window.print()"></i>
                                    <i class="fas fa-print"></i> Print
                                </button>
                        </div>
    </div>
    <!-- /.invoice -->
    </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
    @endforeach
@endsection

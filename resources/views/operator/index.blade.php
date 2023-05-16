@extends('layouts.app')
@section('content')
<br>
  <div class="card mt-2">
    <div class="card-header">
      <h3 class="card-title">Machine Checkup</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body table-responsive p-0" >
        <form action="{{url('machineCheck')}}" method="POST">
            @csrf
        <table class="table table-head-fixed text-nowrap table-sm">

        <thead>
          <tr>
            <th>S/N</th>
            <th>Parameter</th>
            <th>OK</th>
            <th>NOT OK</th>
            <th>N/A</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ( $operator as $op )
                <td ><input type="text" value="{{$op->id}}" name="machine_id" hidden></td>
                @endforeach

            </tr>
          <tr>
            <td>1.</td>
            <td>Walk around the machine/Zunguka machine</td>
            <td>
                <div class="icheck-primary d-inline">
                    <input type="radio" id="radioPrimary1" name="r1" value="OK">
                    <label for="radioPrimary1">
                    </label>
                  </div>
            </td>
            <td>
                <div class="icheck-danger d-inline">
                    <input type="radio" id="radioPrimary2" name="r1" value="NOT OK">
                    <label for="radioPrimary2">
                    </label>
                  </div>
            </td>
            <td>
                <div class="icheck-secondary d-inline">
                    <input type="radio" id="radioPrimary3" name="r1" value="N/A">
                    <label for="radioPrimary3">
                    </label>
                  </div>
            </td>
          </tr>

      <tr>
          <td>2</td>
          <td>Check for any damage,loose nut,pins,leakage,etc/
          Kagua tofauti zilizopo, uharibifu,nati zilizolegea, nk</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1b" name="r2" value="OK">
                <label for="radioPrimary1b">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2b" name="r2" value="NOT OK">
                <label for="radioPrimary2b">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3b" name="r2" value="NOT OK">
                <label for="radioPrimary3b">
                </label>
              </div>
        </td>
      </tr>
      </tr>

      <tr>
          <td>3</td>
          <td>Engine coolant level/kiasi cha maji kwenye rejeta</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1c" name="r3" value="OK">
                <label for="radioPrimary1c">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2c" name="r3" value="NOT OK">
                <label for="radioPrimary2c">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3c" name="r3" value="N/A">
                <label for="radioPrimary3c">
                </label>
              </div>
        </td>
      </tr>
      </tr>

      <tr>
          <td>4</td>
          <td>Engine oil level/ kiasi cha injini oil</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1d" name="r4" value="OK" >
                <label for="radioPrimary1d">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2d" name="r4" value="NOT OK">
                <label for="radioPrimary2d">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3d" name="r4" value="N/A">
                <label for="radioPrimary3d">
                </label>
              </div>
        </td>
      </tr>
      </tr>

      <tr>
          <td>5</td>
          <td>Transmission oil level/kiasi cha oil ya gia box</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="ok" name="r5" value="OK">
                <label for="ok">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="notok" name="r5" value="NOT OK">
                <label for="notok">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="na" name="r5" value="N/A">
                <label for="na">
                </label>
              </div>
        </td>
      </tr>
      </tr>

      <tr>
          <td>6</td>
          <td>Diesel level/Ujazo wa Dizeli</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1f" name="r6" value="OK">
                <label for="radioPrimary1f">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2f" name="r6" value="NOT OK">
                <label for="radioPrimary2f">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3f" name="r6" value="N/A">
                <label for="radioPrimary3f">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>7</td>
          <td>Air filter/filter za upepo</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1g" name="r7" value="OK">
                <label for="radioPrimary1g">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2g" name="r7" value="NOT OK">
                <label for="radioPrimary2g">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3g" name="r7" value="N/A">
                <label for="radioPrimary3g">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>8</td>
          <td>check tyre's air pressure/ Angalia upepo wa matairi</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1h" name="r8" value="OK">
                <label for="radioPrimary1h">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2h" name="r8" value="NOT OK">
                <label for="radioPrimary2h">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3h" name="r8" value="N/A">
                <label for="radioPrimary3h">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>9</td>
          <td>Start engine/ Washa mashine</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1i" name="r9" value="OK">
                <label for="radioPrimary1i">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2i" name="r9" value="NOT OK">
                <label for="radioPrimary2i">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3i" name="r9" value="N/A">
                <label for="radioPrimary3i">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>10</td>
          <td>Check cabin/Angalia vitu vyote kwenye cabin,vioo,gages,first aid kit, seat belt etc</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1j" name="r10" value="OK">
                <label for="radioPrimary1j">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2j" name="r10" value="NOT OK">
                <label for="radioPrimary2j">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3j" name="r10" value="N/A">
                <label for="radioPrimary3j">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>11</td>
          <td>Brake air pressure/ upepo wa breki</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1k" name="r11" value="OK">
                <label for="radioPrimary1k">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2k" name="r11" value="NOT OK">
                <label for="radioPrimary2k">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3k" name="r11" value="N/A">
                <label for="radioPrimary3k">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>12</td>
          <td>Engine oil temperature/Joto la oil ya injini</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1l" name="r13"  value="OK">
                <label for="radioPrimary1l">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2l" name="r13"  value="NOT OK">
                <label for="radioPrimary2l">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3l" name="r13"  value="N/A">
                <label for="radioPrimary3l">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>13</td>
          <td>Coolant temperature/ Joto la maji ya rejeta</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1m" name="r14"  value="OK">
                <label for="radioPrimary1m">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2m" name="r14"  value="NOT OK">
                <label for="radioPrimary2m">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3m" name="r14"  value="N/A">
                <label for="radioPrimary3m">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>14</td>
          <td>check horn/ kagua honi</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1mm" name="r15"  value="OK">
                <label for="radioPrimary1mm">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2mm" name="r15"  value="NOT OK">
                <label for="radioPrimary2mm">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3mm" name="r15"  value="N/A">
                <label for="radioPrimary3mm">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>15</td>
          <td>Back-up alarm/ Honi ya kurudi nyuma</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1n" name="r16"  value="OK">
                <label for="radioPrimary1n">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2n" name="r16"  value="NOT OK">
                <label for="radioPrimary2n">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3n" name="r16"  value="N/A">
                <label for="radioPrimary3n">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>16</td>
          <td>Check lights/ kagua taa</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1o" name="r17"  value="OK">
                <label for="radioPrimary1o">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2o" name="r17"  value="NOT OK">
                <label for="radioPrimary2o">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3o" name="r17"  value="N/A">
                <label for="radioPrimary3o">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>17</td>
          <td>Check wipers/ kagua waipa</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1p" name="r18"  value="OK">
                <label for="radioPrimary1p">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2p" name="r18"  value="NOT OK">
                <label for="radioPrimary2p">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3p" name="r18"  value="N/A">
                <label for="radioPrimary3p">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>18</td>
          <td>check steering system/ kagua mfumo wa usukani.</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1q" name="r19"  value="OK">
                <label for="radioPrimary1q">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2q" name="r19"  value="NOT OK">
                <label for="radioPrimary2q">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3q" name="r19"  value="N/A">
                <label for="radioPrimary3q">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>19</td>
          <td>Check brake system/ Kagua mfumo wa breki</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1r" name="r20"  value="OK">
                <label for="radioPrimary1r">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2r" name="r20"  value="NOT OK">
                <label for="radioPrimary2r">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3r" name="r20"  value="N/A">
                <label for="radioPrimary3r">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>20</td>
          <td>Check track chain/ Kagua cheni za track</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1s" name="r21"  value="OK">
                <label for="radioPrimary1s">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2s" name="r21"  value="NOT OK">
                <label for="radioPrimary2s">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3s" name="r21"  value="N/A">
                <label for="radioPrimary3s">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>21</td>
          <td>Check track roller/ Kagua rola za track</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1t" name="r22"  value="OK">
                <label for="radioPrimary1t">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2t" name="r22"  value="NOT OK">
                <label for="radioPrimary2t">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3t" name="r22"  value="N/A">
                <label for="radioPrimary3t">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>22</td>
          <td>Check sprockets/ Kagua sproketi</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1u" name="r23"  value="OK">
                <label for="radioPrimary1u">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2u" name="r23"  value="NOT OK">
                <label for="radioPrimary2u">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3u" name="r23"  value="N/A">
                <label for="radioPrimary3u">
                </label>
              </div>
        </td>
      <tr>
          <td>23</td>
          <td>Check idlers/ Kagua idla</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1v" name="r24"  value="OK">
                <label for="radioPrimary1v">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2v" name="r24"  value="NOT OK">
                <label for="radioPrimary2v">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3v" name="r24"  value="N/A">
                <label for="radioPrimary3v">
                </label>
              </div>
        </td>
      </tr>

      <tr>
          <td>24</td>
          <td>Check fire extinguisher/ Kagua kizima moto</td>
          <td>
            <div class="icheck-primary d-inline">
                <input type="radio" id="radioPrimary1w" name="r25"  value="OK">
                <label for="radioPrimary1w">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-danger d-inline">
                <input type="radio" id="radioPrimary2w" name="r25"  value="NOT OK">
                <label for="radioPrimary2w">
                </label>
              </div>
        </td>
        <td>
            <div class="icheck-secondary d-inline">
                <input type="radio" id="radioPrimary3w" name="r25"  value="N/A">
                <label for="radioPrimary3w">
                </label>
              </div>
        </td>
      </tr>
        </tbody>
      </table>
      <div class="card-footer mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Click To Save</button>
      </div>
    </form>
    </div>


    <!-- /.card-body -->
  </div>


@endsection

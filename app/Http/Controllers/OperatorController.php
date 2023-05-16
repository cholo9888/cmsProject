<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\CheckUp;
use DB;
use Auth;
use App\Models\Report;
class OperatorController extends Controller
{
    public function index(){
        $operator= Machine::orderBy('id', 'desc')->paginate(1);
        return view('operator/index',compact('operator'))->with('status','Operator Information Inserted');
    }
    public function view(){
       $a = Auth::user()->name;
       $name = DB::table('machines')
       ->select('machine_name')
       ->where('operator_name', '=',$a)
      ->orderBy('created_at','desc')
      ->limit(1)
       ->get();
       $machine = DB::table('machines')
       ->join('check_ups','machines.id','=','check_ups.machine_id')
       ->select()
       ->where('operator_name', '=',$a)
       ->orderBy('machines.created_at','desc')
       ->limit(1)
       ->get();
    //    dd($machinee);
    //    $machine = Machine::where('operator_name', '=',$a) ->orderBy('created_at','desc')->limit(1)->get();
       foreach($name as $n){
        switch ($n->machine_name) {
            case 'DT1':
              return view('operator.bench',compact('machine'));
              break;
            case 'DT2':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT3':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT4':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT5':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT6':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT7':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT8':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT9':
                return view('operator.bench',compact('machine'));
              break;
              case 'DT10':
                return view('operator.bench',compact('machine'));
              break;

            default:
              return view('operator.non_bench',compact('machine'));
            break;
          }
       }


    }
    public function report(Request $request){
        $validated = $request->validate([
            'operator_name' => 'required',
            'machine_name' =>'required',
            'fuel' => 'required',
            'shift' => 'required',
            'start' =>'required',
            'checkup_id'=>'required',
            'end'=> 'required',
            'b1' => 'required | integer',
            'b2' => 'required | integer',
            'b3' => 'required | integer',
            'b4' => 'required | integer',
            'b5' => 'required | integer',
            'b6' => 'required | integer',
            'totalordercost' => 'required',
            'red' => 'required |integer',
            'total' => 'required',
            'capacity' =>'required',
            'status' =>'required',
            'limestone_toonage' =>'required',
            'redsoil_tonage' =>'required',
            'grand_total' =>'required',

        ]);
        Report::create($validated);
        return redirect('/dashboard')->with('status', 'Daily Report Submitted Successfully ');
    }
    public function confirm(){

        $a = Auth::user()->name;
        $machine = DB::table('reports')
        ->select()
        ->where('operator_name', '=',$a)
       ->orderBy('created_at','desc')
        ->get(1);
        // dd($machine);
       return view('operator.confirm',compact('machine'));
    }
    public function non_report(Request $request){
        $validated = $request->validate([
            'operator_name' => 'required',
            'machine_name' =>'required',
            'fuel' => 'required',
            'shift' => 'required',
            'start' =>'required',
            'checkup_id'=>'required',
            'end'=> 'required',
            'capacity' =>'required',
        ]);
        Report::create($validated);
        return redirect('/dashboard')->with('status', 'Daily Report Submitted Successfully ');

    }
    public function bench(){
        return view('operator.bench');
    }
    public function non_bench(){
        return view('opreator.bench');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'operator_name' => 'required',
            'machine_name' =>'required',
            'capacity' =>'required',
            'fuel' =>'required',
            'shift' =>'required',
            'start' =>'required',

        ]);
        Machine::create($validated);
        return to_route('operator.index');
    }
    public function machineCheck(Request $request){
        $validated = $request->validate([
            'r1' => 'required',
            'r2' =>'required',
            'r3' =>'required',
            'r4' =>'required',
            'r5' =>'required',
            'r6' => 'required',
            'r7' =>'required',
            'r8' =>'required',
            'r9' =>'required',
            'r10' =>'required',
            'r11' => 'required',
            'r13' =>'required',
            'r14' =>'required',
            'r15' =>'required',
            'r16' => 'required',
            'r17' =>'required',
            'r18' =>'required',
            'r19' =>'required',
            'r20' =>'required',
            'r21' => 'required',
            'r22' =>'required',
            'r23' =>'required',
            'r24' =>'required',
            'r25' =>'required',
            'machine_id' =>'required',
        ]);
        CheckUp::Create($validated);
        return redirect('/dashboard')->with('status', 'Thank You! See You ');

    }
    public function dailyReport(){
        $a = Auth::user()->name;
    //     $reports = DB::table('reports')
    //     ->select()
    //     ->where('operator_name', '=',$a)
    //    ->orderBy('created_at','desc')
    //     ->get();
    $reports = Report::where('operator_name', $a)->
    paginate(10);

        // $reports = DB::table('reports')
        // ->join('check_ups','reports.checkup_id','=','check_ups.machine_id')
        // ->select()
        // ->where('operator_name', '=',$a)
        // ->orderBy('reports.created_at','desc')
        // ->limit(1)
        // ->get();

        // dd($reports);
     return view('operator.daily_report',compact('reports'));
    }
    public function show($id){
         $report = DB::table('reports')
        ->join('check_ups','reports.checkup_id','=','check_ups.machine_id')
        ->select()
        ->where('reports.id', '=',$id)
        ->get();
        return view('operator.report',compact('report'));
    }
    public function final($id){
        $report = DB::table('reports')
       ->join('check_ups','reports.checkup_id','=','check_ups.machine_id')
       ->select()
       ->where('reports.id', '=',$id)
       ->get();
       return view('admin.report',compact('report'));
   }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\temp;
use Illuminate\Support\Facades\Session;
use Khill\Lavacharts\Charts\Chart;
use Khill\Lavacharts\Laravel\LavachartsServiceProvider;
use Khill\Lavacharts\Laravel\LavachartsFacade;
use Khill\Lavacharts\Lavacharts;


class TempController extends Controller
{
     public function store(Request $request){
         $data=$request->all();
//         dd($data);
         temp::create($data);
         Session::flash('message','Temperature added Successfully');
          return redirect()->back();


     }
     public function show(){
         $data=temp::all();
//         dd($data);
         return view('Admin.user.show',['allValue'=> $data]);

     }

//     public  function chart(){
//         $lava = new Lavacharts();
//         $temperature=$lava->DataTable();
//         $data=temp::select("Room1 as 0","Room2 as 1","Room3 as 2","Room4 as 3")->get()->toArray();
//         $temperature->addNumberColumn('Room1')
//             ->addNumberColumn('Room2')
//             ->addNumberColumn('Room3')
//             ->addNumberColumn('Room4')
//             ->addRows($data);
//         $lava->LineChart('Temperature',$temperature);
////         $chart = TempController::chart();
////         dd($lava);
//
//         return view('Admin.user.show',['lava'=> $lava]);
//
//     }
    public function chart(){
        $data=temp::all();
//         dd($data);
        return view('Admin.user.lineGraph',['allValue'=> $data]);

    }
}

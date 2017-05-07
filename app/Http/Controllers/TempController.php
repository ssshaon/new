<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\temp;
use Illuminate\Support\Facades\Session;


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
}

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


     }
     public function show(){
         $data=temp::all();
         return view('Admin.show','$data');

     }
}

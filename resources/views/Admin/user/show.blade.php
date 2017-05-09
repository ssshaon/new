@extends('Admin.layouts.main')
@section('main_title', 'View Temperature')
@section('view_temperature','active')
@section('content_name','View Temperature')
@section('content')
{!! Form::label('name','Date') !!}
 {!!Form::date('name', \Carbon\Carbon::now())  !!}
{{--{{dd($allValue)}}--}}
<table class="table table-bordered">
    <tr>
        <th>Room1</th>
        <th>Room2</th>
        <th>Room3</th>
        <th>Room4</th>
    </tr>
    @foreach($allValue as $temp )
        <tr>
            <td>{{$temp->Room1}}</td>
            <td>{{$temp->Room2}}</td>
            <td>{{$temp->Room3}}</td>
            <td>{{$temp->Room4}}</td>
        </tr>

        @endforeach







</table>
    @endsection

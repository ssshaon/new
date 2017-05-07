@extends('Admin.layouts.main')
@section('main_title', 'Add Temperature')
@section('add_temperature','active')
    @section('content_name','Add Temperature')
    @section('content')
@if(Session::has('message'))
    <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>

@endif
{!! Form::label('name','Date') !!}
{!!Form::date('name', \Carbon\Carbon::now())  !!}
{!! Form::open(['method'=>'post','url'=>'admin/user/store']) !!}
<div>
    {!! Form::label('Room1','Room1') !!}
    {!! Form::text('Room1',null,['placeholder'=>'Temperature']) !!}

</div>
{{--echo Form::date('name', \Carbon\Carbon::now());--}}

<div>
    {!! Form::label('Room2','Room2') !!}
    {!! Form::text('Room2', null,['placeholder' => 'Temperature'])  !!}
</div>
<div>
    {!! Form::label('Room3','Room3') !!}
    {!! Form::text('Room3',null,['placeholder'=>'Temperature']) !!}

</div>
<div>
    {!! Form::label('Room4','Room4') !!}
    {!! Form::text('Room4', null,['placeholder' => 'Temperature'])  !!}
</div>

<div>
    {!! Form::submit('Save') !!}
</div>
{!! Form::close() !!}
        @endsection
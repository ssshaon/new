@extends('Admin.layouts.main')
{!! Form::open(['method'=>'post','action'=>'/admin/temp']) !!}
<div>
    {!! Form::label('float','Room1') !!}
    {!! Form::text('float',null,['placeholder'=>'Temperature']) !!}

</div>
<div>
    {!! Form::label('float','Room2') !!}
    {!! Form::text('float', null,['placeholder' => 'Temperature'])  !!}
</div>
<div>
    {!! Form::label('float','Room3') !!}
    {!! Form::text('float',null,['placeholder'=>'Temperature']) !!}

</div>
<div>
    {!! Form::label('float','Room4') !!}
    {!! Form::text('float', null,['placeholder' => 'Temperature'])  !!}
</div>

<div>
    {!! Form::submit('Save') !!}
</div>
{!! Form::close() !!}
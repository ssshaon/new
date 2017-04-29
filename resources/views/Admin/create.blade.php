@if(Session::has('message'))
    <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>

@endif
{!! Form::label('name','Date') !!}
{!!Form::date('name', \Carbon\Carbon::now())  !!}
{!! Form::open(['method'=>'post','url'=>'admin/store']) !!}
<div>
    {!! Form::label('float','Room1') !!}
    {!! Form::text('float',null,['placeholder'=>'Temperature']) !!}

</div>
{{--echo Form::date('name', \Carbon\Carbon::now());--}}

<div>
    {!! Form::label('float1','Room2') !!}
    {!! Form::text('float1', null,['placeholder' => 'Temperature'])  !!}
</div>
<div>
    {!! Form::label('float2','Room3') !!}
    {!! Form::text('float2',null,['placeholder'=>'Temperature']) !!}

</div>
<div>
    {!! Form::label('float3','Room4') !!}
    {!! Form::text('float3', null,['placeholder' => 'Temperature'])  !!}
</div>

<div>
    {!! Form::submit('Save') !!}
</div>
{!! Form::close() !!}
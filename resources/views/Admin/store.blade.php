@if(Session::has('message'))
    <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>

@endif
{!! Form::open(['method'=>'post','url'=>'admin/store']) !!}

    {!! Form::label('float','Room1') !!}
    {!! Form::text('float',null,['placeholder'=>'Temperature']) !!}



{{--{!! Form::label('float','Room2') !!}--}}
{{--{!! Form::text('float', null,['placeholder' => 'Temperature'])  !!}--}}


{{--{!! Form::label('float','Room3') !!}--}}
{{--{!! Form::text('float',null,['placeholder'=>'Temperature']) !!}--}}


{{--{!! Form::label('float','Room4') !!}--}}
{{--{!! Form::text('float', null,['placeholder' => 'Temperature'])  !!}--}}




{!! Form::close() !!}
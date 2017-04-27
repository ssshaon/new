
{!! Form::label('name','Date') !!}
 {!!Form::date('name', \Carbon\Carbon::now())  !!}

 <?php
         echo $data;

@extends('Admin.layouts.main')
@section('main_title', 'Chart Line')
@section('view_chartline','active')
@section('content_name','Chart Line')
@section('content')
    {!! Form::label('name','Date') !!}
    {!!Form::date('name', \Carbon\Carbon::now())  !!}
    <script>
(document).ready(function(){
ajax({
url : "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js",
type : "GET",
success : function(data){
console.log(data);

var Room1 = [];
var Room2 = [];
var Room3 = [];
var Room4 = [];

for(var i in data) {
Room1.push("Room1 " + data[i].Room1);
    Room2.push("Room2 " + data[i].Room2);
    Room3.push("Room3 " + data[i].Room3);
    Room4.push("Room4 " + data[i].Room4);
    temperature_celcius.push(data[i].temperature);
}

var chartdata = {
labels: Room1,
    labels: Room2,
    labels: Room3,
    labels: Room4,
datasets: [
{
label: "Temperature1",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(59, 89, 152, 0.75)",
borderColor: "rgba(59, 89, 152, 1)",
pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
pointHoverBorderColor: "rgba(59, 89, 152, 1)",
data: temperature_celcius
},
{
label: "Temperature2",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(29, 202, 255, 0.75)",
borderColor: "rgba(29, 202, 255, 1)",
pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
pointHoverBorderColor: "rgba(29, 202, 255, 1)",
data: temperature_celcius
},
{
label: "Temperature3",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(211, 72, 54, 0.75)",
borderColor: "rgba(211, 72, 54, 1)",
pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
pointHoverBorderColor: "rgba(211, 72, 54, 1)",
data: temperature_celcius
},
    {
    label: "Temperature4",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"rgba(211,72,54,1)"
        borderColor: "rgba(211, 72, 54, 1)",
        pointHoverBackgroundColor: "rgba(210, 70, 54, 1)",
        pointHoverBorderColor: "rgba(211, 72, 54, 1)",
        data: temperature_celcius
}
]
};

var ctx = $("#mycanvas");

var LineGraph = new Chart(ctx, {
type: 'line',
data: chartdata
});
},
error : function(data) {

}
});
});
    </script>
 @endsection
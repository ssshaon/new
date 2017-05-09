@extends('Admin.layouts.main')
@section('main_title', 'View Temperature')
@section('view_temperature','active')
@section('content_name','View Temperature')
@section('content')
    {!! Form::label('name','Date') !!}
    {!!Form::date('name', \Carbon\Carbon::now())  !!}
    <script>
(document).ready(function(){
ajax({
url : "C:\laragon\www\withzero\chartline.js",
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
}

var chartdata = {
labels: userid,
datasets: [
{
label: "facebook",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(59, 89, 152, 0.75)",
borderColor: "rgba(59, 89, 152, 1)",
pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
pointHoverBorderColor: "rgba(59, 89, 152, 1)",
data: facebook_follower
},
{
label: "twitter",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(29, 202, 255, 0.75)",
borderColor: "rgba(29, 202, 255, 1)",
pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
pointHoverBorderColor: "rgba(29, 202, 255, 1)",
data: twitter_follower
},
{
label: "googleplus",
fill: false,
lineTension: 0.1,
backgroundColor: "rgba(211, 72, 54, 0.75)",
borderColor: "rgba(211, 72, 54, 1)",
pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
pointHoverBorderColor: "rgba(211, 72, 54, 1)",
data: googleplus_follower
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
@extends('layouts.app')
@section('inline-scripts')
	function work_time(){
		let delay = getRndInteger(1,10)*1000;
		setTimeout(function(){ r(delay); }, delay);
	}
	function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
	}
	let promise = new Promise(resolve => {
	work_time();
		function r(d){
			resolve("complete: " + d);
		}
	});
	promise.then(alert);
	/* promiseWork.then(function(complete){
		console.log("Delay: "+complete);
	}).catch(function(rejectTxt){
		console.log("Reject: "+rejectTxt);
	}) */
@stop
@section('content')
		<h1>{{$title}}</h1>
		<p>This is the about page</p>
@endsection

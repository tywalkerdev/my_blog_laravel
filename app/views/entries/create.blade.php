@extends('layouts.master')

@section('content')
	<h1>Hello There</h1>
	{{ Form::open(array('method' => 'post')) }}
		@include('entries/partials/_form')
	{{ Form::close() }}
@stop
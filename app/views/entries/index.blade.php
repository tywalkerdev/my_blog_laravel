@extends('layouts.master')

@section('content')
	
	@foreach ($entries as $entry)
		
		<div class="col-lg-9 col-lg-offset-3">
			<h1>{{ $entry->title }}</h1>
			<p>Posted on: {{ date("d F Y", strtotime($entry->created_at)) }}</p>
			<p>{{ $entry->content }}</p>
			<a href="{{ URL::to('/' . $entry->id) }}">View This Entry</a>

			{{ Form::open(array('url' => '/' . $entry->id)) }}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::submit('Delete This Entry', array('class' => 'btn-primary')) }}
			{{ Form::close() }}
		</div>

	@endforeach
	<div class="col-lg-4 col-lg-offset-4">
		<a href="{{ URL::to('/create') }}"><button class="btn-lg btn-success">Create A New Entry</button></a>
	</div>
@stop
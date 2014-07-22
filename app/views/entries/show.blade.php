@extends('layouts.master')

@section('content')
	<div class="col-lg-offset-2 col-lg-10">
	<h1>{{ $entry->title }}</h1>
	<p>{{ $entry->content }}</p>
	<a href="{{ URL::to('/' . $entry->id . '/edit') }}">Edit This User</a>
	</div>

	<div class="col-lg-offset-2 col-lg-4">
		<h3>Leave a Comment: </h3>

		{{ Form::open(array('method' => 'post')) }}	
			<div>
				{{ Form::label('author', 'Author: ') }}
				{{ Form::text('author') }}
			</div>
			<div>
				{{ Form::label('content', 'Content: ') }}
				{{ Form::textarea('content') }}
			</div>	
			<div>
				{{ Form::submit() }}
			</div>
		{{ Form::close() }}

		@foreach ($comments as $comment)
			<p><em>{{ $comment->author }} says:</em></p>
			<p>{{ $comment->content }}</p>
		@endforeach
	</div>
@stop
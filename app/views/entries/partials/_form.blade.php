<div>
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title') }}
</div>	
<div>
	{{ Form::label('content', 'Content: ') }}
	{{ Form::textarea('content') }}
</div>
<div>
	{{ Form::label('tags', 'Tags: ') }}
	{{ Form::select('tags', array('1' => 'programming', '2' => 'movies', '3' => 'music')) }}
</div>
<div>
	{{ Form::submit() }}
</div>
<?php

class EntryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = Entry::all();

		return View::make('entries.index', compact('entries'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('entries.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$entry = new Entry;

		$entry->title = Input::get('title');
		$entry->content = Input::get('content');
		$entry->tags = Input::get('tags');
		$entry->save();

		return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$entry = Entry::whereId($id)->first();
		$comments = $entry->comments()->get();
		return View::make('entries.show', compact('entry', 'comments'));
	}

	public function createComment($id)
	 	{
	 		$entry = Entry::whereId($id)->first();
	 		
	 		$comment = new Comment;

	 		$comment->author = Input::get('author');
	 		$comment->content = Input::get('content');

	 		$entry->comments()->save($comment);

	 		return Redirect::to('/' . $id);

	 	} 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('entries.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$entry = Entry::whereId($id)->first();

		$entry->title = Input::get('title');
		$entry->content = Input::get('content');
		$entry->tags = Input::get('tags');

		$entry->save();

		return Redirect::to('/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$entry = Entry::whereId($id)->first();

		$entry->delete();

		return Redirect::to('/');
	}


}

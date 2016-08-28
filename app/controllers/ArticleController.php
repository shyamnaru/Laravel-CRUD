<?php

class ArticleController extends \BaseController {

	public $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('articles.index')->with('articles', Article::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('articles.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::get(), Article::$rules, Article::$messages);
		if($validator->fails())
		{
			return Redirect::back()-> withInput() -> withErrors($validator -> messages());
		}
		else
		{
			$article = new Article;
			$article->title = Input::get('title');
			$article->body = Input::get('body');
			$article->save();
			return Redirect::route('articles.index')->with('success','Successfully Saved!');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('articles.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->content = View::make('articles.edit')->with('article',Article::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::get(), Article::$rules, Article::$messages);
		if($validator->fails())
		{
			return Redirect::back()-> withInput() -> withErrors($validator -> messages());
		}
		else
		{
			$article = Article::find($id);
			$article->title = Input::get('title');
			$article->body = Input::get('body');
			$article->save();
			return Redirect::route('articles.index')->with('success','Successfully Saved!');;
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::find($id)->delete();
		return Redirect::route('articles.index')->with('success','Successfully Deleted!');;
	}


}

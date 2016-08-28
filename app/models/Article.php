<?php
class Article extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articles';

	//Define rules.
	public static $rules = ['title'=>'required'];

	//To generate custom error messages.
	public static $messages = ['title.required'=>'Please enter title field.'];

}

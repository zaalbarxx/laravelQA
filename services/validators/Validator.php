<?php
namespace Services\Validators;
abstract class Validator
{
	protected $attributes;
	protected $errors;
	static $messages = array(
		'required'  => 'The :attribute is required.',
		'between'   => 'The :attribute must be between :min and :max characters.',
		'email'     => 'The :attribute must be an email.',
		'unique'    => 'The :attribute is existing in database.',
		'alpha_num' => 'The :attribute must contain only alphanumeric characters.'
	);

	public function __construct($attributes=null)
	{
		$this->attributes = $attributes ?: \Input::all() ;
	}

	public function passes()
	{
		$validation = \Validator::make($this->attributes, static::$rules, static::$messages);
		if ($validation->passes()) {
			return true;
		}
		$this->errors = $validation->errors();
		return false;
	}
	public function getErrors(){
		return $this->errors;
	}
}
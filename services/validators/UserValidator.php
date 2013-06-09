<?php
namespace Services\Validators;

class User extends Validator{
	public static $registration_rules = array(
		'username' => 'Required|Between:3,50|Email|Unique:users,email',
		'password' => 'Required|Alpha_dash|Between:4,15',
		'email' => 'Required|email|Between:4,30'
	);


}


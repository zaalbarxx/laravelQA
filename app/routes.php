<?php

Route::get('test',function(){
echo get_class(Redirect::getFacadeRoot());
});
Route::get('/', array('as'=>'index','uses'=>'MainController@index'));
Route::get('login', array('as'=>'login','before'=>'auth',function(){
	return View::make('user.login');
}));
Route::get('register',array('as'=>'register','before'=>'auth',function(){
	return View::make('user.register');
}));

Route::post('register',array('before'=>'auth','uses'=>'UserController@register'));
Route::post('login',array('before'=>'auth','uses'=>'UserController@login'));
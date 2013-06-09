<?php
class UserController extends BaseController {
	public function register()
	{
		$input = Input::all();
		$validation = new Services\Validators\User($input);
		if($validation->passes()){
			$user = new User;
			$user->username = $input['username'];
			$user->password = Hash::make($input['password']);
			$user->email = $input['email'];
			$user->verified = 1;
			$user->created_at = new DateTime;
			$user->updated_at = new DateTime;
				if($user->save()){
					return Redirect::intended->with('message','Registration was successful. Now you can log in.');
				}
				else{
					return Redirect::back->with('message','Something went wrong with saving user.');
				}	
		}
		else
		{
			return Redirect::back->with('errors',$validation->getErrors->all());
		}
	}
}
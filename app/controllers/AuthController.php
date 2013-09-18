<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('auth/login');
	}

	public function postLogin()
	{
		$input = Input::all();

		$rules = [
			'username' => 'required',
			'password' => 'required|alpha_num'
		];

	    $validator = Validator::make($input, $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('login')
	        	->withErrors($validator)
	        	->withInput(Input::except('password'));
	    }

	    $remember = isset($input['remember-me']) ? true : false;

	    if (!Auth::attempt(['username' => $input['username'], 'password' => $input['password']], $remember)
	    	&& !Auth::attempt(['email' => $input['username'], 'password' => $input['password']], $remember))
		{
			return Redirect::to('login')
				->with('alert', ['danger', 'Email address or password is incorrect.'])
				->withInput(Input::except('password'));
		}
		else
		{
			return Redirect::intended('/');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('login')
			->with('alert', ['success', 'Thank you, please come again.']);
	}

	public function getActivate()
	{
		return View::make('auth/activate');
	}

}
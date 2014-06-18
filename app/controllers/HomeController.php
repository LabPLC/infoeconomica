<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index() {
		$estudios = Post::where('tipo', '=', 1)->take(2)->get();
		$infografias = Post::where('tipo', '=', 2)->take(2)->get();
		return View::make('home',array('estudios'=>$estudios,'infografias'=>$infografias));
	}

	public function estudios() {
		return View::make('estudios');
	}

	public function infografias() {
		return View::make('infografias');
	}

	public function about() {
		return View::make('about');
	}

	/*
		Login / Logout
	*/

	public function login_form() {
		return View::make('control.login');
	}

	public function login() {

		//traer las credenciales
		$username = Input::get('user');
		$password = Input::get('pass');

		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
    		return Redirect::intended('control');
		} else {
			return Redirect::to('control/login');
		}
	}

	public function logout() {
		//return View::make('control.login');
		Auth::logout();
		return Redirect::to('control/login');
	}



}
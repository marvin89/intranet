<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@landing');
Route::get('home', checkLogin('HomeController@home'));

Route::post('checkUser', function(){
	$uid = Input::get('uid');
	$is_registered = User::where('uid','=',$uid)->first();
	if (!$is_registered) {
		$user = new User();
		$user->uid = $uid;
		$user->givenName = Input::get('givenName');
		$user->familyName = Input::get('familyName');
		$user->email = Input::get('email');
		$user->image = Input::get('image');
		$user->birthday = Input::get('birthday');
		$user->save();
	}
	Session::put('uid',$uid);
});

function checkLogin($action) {
	return !isset($_COOKIE['G_AUTHUSER_H1'])?'HomeController@landing':$action;
}






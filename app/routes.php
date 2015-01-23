<?php

/*Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');*/

//Route::get('users','UsersController@index');
//Route::get('users/{username}','UsersController@show');

Route::resource('users','UsersController');

Route::get('/', function()
{
	/*$users = DB::table('users')->where('username','!=','mimie')->get();
	$users = User::find(2);

	return $users;*/

	/*$user = new User;
	$user->username = "kitz";
	$user->password = Hash::make('password');

	$user->save();*/

	/*User::create([
			'username' => 'noi',
			'password' => Hash::make('password')
	]);*/

	/*$user = User::find(2);
	$user->username = 'joy';
	$user->save();*/

	/*$user = User::find(2);
	$user->delete();*/


	//return User::all();

	return User::orderBy('username','asc')->take(2)->get();

});

/*Route::get('users', function()
{
	$users = User::all();

	//return View::make('users/index')->withUsers($users);
	return View::make('users.index',['users' => $users]);
});*/

/*Route::get('users/{username}',function($username){

	$user = User::whereUsername($username)->first();
	return View::make('users.show',['user' => $user]);
}); */
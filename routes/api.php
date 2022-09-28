<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {

	Route::get('/GetAllUsers','getAllUsers');
	Route::get('/GetUserById/{user}','getUserById');
	Route::get('/SaveUser','saveUser')->middleware((['role:admin|reginal.ta.manager|ta.manager|ta.lead|ta.officer|ta.backoffice|ta.assistant']));
	Route::get('/UpdateUser/{user}','updateUser');
	Route::get('/DeleteUser/{user}','deleteUser');


	
});

Route::get('/test', function (){

	$user = User::find(1);
	$user->assignRole('admin');
	$user = User::find(2);
	$user->assingnRole('user');
  //$role = Role::create(['name' => 'user']);
	//return $role;
});



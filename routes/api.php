<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {

	Route::get('/GetAllUsers','getAllUsers');
	Route::get('/GetUserById/{user}','getUserById');
	Route::get('/SaveUser','saveUser');
	Route::get('/UpdateUser/{user}','updateUser');
	Route::get('/DeleteUser/{user}','deleteUser');


});



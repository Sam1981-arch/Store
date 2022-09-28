<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/test', function (){

	$user = User::find(1);
	$user->assignRole('admin');
	$user = User::find(2);
	$user->assingnRole('user');
  //$role = Role::create(['name' => 'user']);
	//return $role;
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/garments', [App\Http\Controllers\GarmentsController::class, 'garments'])->name('garments');

Route::get('/category', [App\Http\Controllers\CategotyController::class, 'category'])->name('category');

Route::get('/brand', [App\Http\Controllers\BrandController::class, 'brand'])->name('brand');




<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $name = 'ahmed';
    dd($name);
});
 
Route::get('users/{id}', function ($id) {
    dd($id);
});

Route::get('users/{id}/coments/{coments}', function ($id , $coment) {
    dd('coment no '. $coment . ' of user '.$id);
});


Route::redirect('profile' , 'new_profile' , 301);
Route::redirect('google' , 'https://www.google.ps' , 301);


Route::get('new_profile', function () {
    dd('hi from new_profile');
})->name('my_new_profile');


Route::prefix('admin')->group(function(){

	Route::get('dashboard',function (){

	});

	Route::get('products',function (){

	});

	Route::get('categories',function (){

	});

	Route::prefix('users')->group(function(){

		Route::get('profile',function (){

	});

	});

});


Route::middleware(['auth'])->group(function (){
	Route::get('categories',function (){

	});
});

Route::middleware('throttle:3,1')->group(function (){
	Route::get('admin',function (){

	});
});



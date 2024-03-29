<?php

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
use App\Project;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//sRoute::get('/home', 'HomeController@index')->name('home');

Route::get('/invoice', function(){
    return view('invoice');
});

Route::get('email' , function(){return new NewUserWelcomeMail();} );

Route::post('follow/{user}', 'FollowsController@store');

// Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


Route::get('{path}',"HomeController@index")->where( 'path', '([A-z\d\-\/_.]+)' );


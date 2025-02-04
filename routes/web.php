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

/* Route::get('/', function () {
    return view('welcome');
});
 */
//Route::get('/register', 'RegistrationController@create');
	
	Route::get('/user/activation/{token}', 'RegisterController@userActivation');
	Route::get('/register', 'RegistrationController@create');
	Route::post('register', 'RegistrationController@store');
	
	Route::get('/main', 'MainController@index');
	Route::post('/login', 'SessionsController@store');
	Route::get('/logout', 'SessionsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

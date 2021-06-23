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
Route::get('/login', ['uses'=> 'LoginController@login']);
Route::post('/login', ['uses'=> 'LoginController@verify']);
Route::get('/register', ['uses'=> 'HomeController@register']);

Route::get('/logout', ['uses'=> 'LogoutController@logout']);

//checking session using middleware to know if the user is valid or not for this pages
Route::group(['middleware'=>['checkSession']],function () {
    Route::get('/home', ['uses'=> 'HomeController@home']);

} );


<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource("cities","CityController");
Route::resource("hotels","HotelController");
Route::resource("cuisines","CuisineController");
Route::resource("foods","FoodController");
Route::resource("hotelfooddefaults","HotelfooddefaultController");
Route::resource("hotelfooddailies","HotelfooddailyController");
Route::resource("orders","OrderController");
Route::auth();
Route::get('/home', 'HomeController@index');

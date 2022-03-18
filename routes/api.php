<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UsersAppController;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\MessageController;
use app\Http\Controllers\OffersController;
use app\Http\Controllers\RatingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('loginforusers',"UsersAppController@loginforusers");
Route::post('signupusers',"UsersAppController@signupusers");
Route::get('allusers',"UsersAppController@allusers");
Route::post('signupuser',"UsersAppController@signupusers");
Route::get('userinformation/{id}/{token}',"UsersAppController@userinformation"); 
Route::post('updateuserse',"UsersAppController@updateuserse");
Route::post('checksignup',"UsersAppController@checksignup");
Route::delete('Removeusers/{id}',"UsersAppController@Removeusers");
 
Route::get('getuserproduct/{id}',"ProductController@getuserproduct");

Route::get('getcompanyoffer/{id}',"OffersController@getcompanyoffer");
Route::get('getuseroffer/{id}',"OffersController@getuseroffer");

Route::post('updateoffer',"OffersController@updateoffer");

Route::post('AddProduct',"ProductController@AddProduct");
Route::get('allProduct',"ProductController@allProduct");
Route::post('updateProduct',"ProductController@updateProduct");
Route::delete('RemoveProduct/{id}',"ProductController@RemoveProduct");
Route::post('Addoffer',"OffersController@Addoffer");
Route::get('alloffer',"OffersController@alloffer");
Route::get('getproductuser/{id}',"OffersController@getproductuser");
Route::delete('Removeoffer/{id}',"OffersController@Removeoffer");
Route::get('userrate/{id}',"RatingController@userrate");
Route::get('getoffermessages/{id}',"MessageController@getoffermessages");


Route::post('Addrate',"RatingController@Addrate");
Route::get('allrate',"RatingController@allrate");

Route::post('addmessage',"MessageController@addmessage");
Route::get('allmessage',"MessageController@allmessage");
Route::delete('RemoveMessage/{id}',"MessageController@RemoveMessage");


Route::get('getusermessages/{id}',"MessageController@getusermessages");

Route::get('getcompanymessages/{id}',"MessageController@getcompanymessages");

 


//php artisan serve --host 0.0.0.0 --port 8000
//php artisan migrate:fresh
//php artisan websocket:ser
//composer remove Vendor/Package guzzlehttp/guzzle
//composer require beyondcode/laravel-websockets
//composer du
//php artisan migrate:refresh --path=database\migrations\2021_09_02_225608_create_orders_table.php

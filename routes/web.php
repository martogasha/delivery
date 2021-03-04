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

Auth::routes();
//CLIENT ROUTES
Route::get('/home', 'HomeController@index')->name('home');
Route::get('Login','AuthController@login')->name('Login');
Route::get('Register','AuthController@register');
Route::resource('index', 'ClientController');
Route::get('book', 'ClientController@booking');
Route::get('pickup', 'ClientController@pickup');
Route::get('lorry', 'ClientController@lorry');
Route::get('trans', 'ClientController@trans');
Route::get('bookings', 'ClientController@bookings');
Route::get('direction/{id}', 'ClientController@direction');
Route::get('userLocation', 'ClientController@location');
Route::post('Reg','AuthController@reg')->name('Register');
Route::post('Log','AuthController@log')->name('log');
Route::post('booking','BookingController@book')->name('booking');
Route::get('carrierSearch', 'ClientController@carrierSearch');
Route::get('displayCarrier','ClientController@displayCarrier');
Route::get('message/{id}', 'ClientController@message');
Route::get('messageMenu', 'ClientController@messageMenu');
Route::get('getMessage/{id}', 'ClientController@getMessage');

//CARRIER ROUTES
Route::get('carrierRegister','AuthController@carrierRegister');
Route::post('carrierReg','AuthController@carrierReg')->name('carrierReg');
Route::get('carrierHome','CarrierController@home');
Route::get('calculateDistance','GoogleMapsController@calculateDistance');
Route::get('carrierDirection/{id}', 'CarrierController@carrierDirection');
Route::get('carrierMessage/{id}', 'CarrierController@message');
Route::get('sendMessage', 'MessageController@sendMessage');

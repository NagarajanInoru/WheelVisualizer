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
Route::get('/', 'HomeController@index'); 


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/newsletter', 'HomeController@newsletter')->name('newsletter');
Route::get('/forms', 'HomeController@forms')->name('forms');
Route::get('/wheels', 'HomeController@wheels')->name('wheels');
Route::get('/csvuplaod', 'HomeController@csv_upload')->name('csvuplaod');
Route::get('/csvuplaodcolor', 'HomeController@csv_upload_color')->name('csvuplaodcolor');
Route::get('/wheels-data', 'HomeController@wheels')->name('wheels_data');
Route::get('/carimages', 'HomeController@carimages')->name('carimages');
Route::get('/wheelsNameChange', 'HomeController@wheelsNameChange')->name('wheelsNameChange');
Route::get('/notFoundCars', 'HomeController@notFoundCars')->name('notFoundCars'); 
Route::get('/fold-fil', 'HomeController@fold_fil');

Route::get('/Falken_Import', 'TireController@Falken_Import');
Route::get('/Falken_Detail_Import', 'TireDetailController@Falken_Detail_Import');
Route::get('/Vehicle_Import', 'VehicleController@Vehicle_Import');
Route::get('/Chassis_Import', 'ChassisController@Chassis_Import');
Route::get('/ChassisModel_Import', 'ChassisModelController@ChassisModel_Import');

Route::get('/tires', 'TireController@index')->name('tires');
Route::get('/tirelist/{tire_size?}', 'TireController@list')->name('tirelist');
Route::get('/tireview/{tire_id}', 'TireController@tireview')->name('tireview');
Route::get('/tirebrand/{brand_name}', 'TireController@brand')->name('tirebrand');

Route::resource('wheel', 'WheelController');

Route::get('/vehicledetails', 'HomeController@vehicledetails')->name('vehicledetails');
Route::get('/selectCarByColor', 'HomeController@selectCarByColor')->name('selectCarByColor');

Route::get('/getFiltersByVehicle', 'VehicleController@getFiltersByVehicle')->name('getFiltersByVehicle');
Route::get('/setFiltersByVehicle', 'VehicleController@setFiltersByVehicle')->name('setFiltersByVehicle');

Route::get('/getFiltersByTire', 'TireController@getFiltersByTire')->name('getFiltersByTire');
Route::get('/setFiltersByTire', 'TireController@setFiltersByTire')->name('setFiltersByTire');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

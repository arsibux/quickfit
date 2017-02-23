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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('companies', 'CompanyController');

Route::resource('packages', 'PackageController');

Route::resource('vehicles', 'VehicleController');

Route::resource('customers', 'CustomerController');

Route::resource('services', 'ServiceController');

Route::resource('products', 'ProductController');

Route::resource('packages', 'PackageController');

Route::resource('subscriptions', 'SubscriptionController');

Route::resource('services', 'ServiceController');

Route::resource('serviceitems', 'ServiceitemController');

Route::resource('subscriptions', 'SubscriptionController');

Route::resource('companies', 'CompanyController');
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


Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/user_profile', 'PagesController@user_profile');
Route::get('/notifications', 'PagesController@notifications');
Route::get('/data_table/accounts', 'AccountController@index');
Route::get('/data_table/disconnected_accounts', 'DisconnectedAccountController@index');
Route::get('/data_table/billing', 'BillController@index');
Route::get('/data_table/collection', 'TransactionController@index');



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

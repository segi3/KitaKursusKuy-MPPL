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

Route::get('/', 'PageController@getHome');

Route::get('kursus', 'PageController@getKursus');

Route::get('user-login', 'PageController@getUserlogin');

Route::get('mentor-login', 'PageController@getMentorlogin');

Route::get('user-register', 'PageController@getUserregister');
Route::post('user-register', 'UsersController@Register')->name('users.register');

Route::get('mentor-register', 'PageController@getMentorregister');

Route::get('transaksi-kursus', 'PageController@getTransaksikursus');

Route::get('transaksi-privat', 'PageController@getTransaksiprivat');

// ! testing blade dashboard

Route::get('dashboard', 'DashboardPageController@getHome');

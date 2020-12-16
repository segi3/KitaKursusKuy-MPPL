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
Route::get('konten/1/1', 'PageController@getKontenKursus1');
Route::get('konten/1/2', 'PageController@getKontenKursus2');
Route::get('konten/1/3', 'PageController@getKontenKursus3');
Route::get('konten/1/4', 'PageController@getKontenKursus4');
Route::get('konten/1/5', 'PageController@getKontenKursus5');
Route::get('konten/1/6', 'PageController@getKontenKursus6');

Route::get('user-login', 'PageController@getUserlogin');

Route::get('mentor-login', 'PageController@getMentorlogin');

Route::get('user-register', 'PageController@getUserregister');
Route::post('user-register', 'UsersController@Register')->name('users.register');

Route::get('mentor-register', 'PageController@getMentorregister');

Route::get('transaksi-kursus', 'PageController@getTransaksikursus');

Route::get('transaksi-privat', 'PageController@getTransaksiprivat');

// ! testing blade dashboard

Route::get('dashboard', 'DashboardPageController@getHome');

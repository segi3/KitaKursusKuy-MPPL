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
Route::get('kursus/1', 'PageController@getKursus1');
Route::get('kursus/2', 'PageController@getKursus2');
Route::get('kursus/3', 'PageController@getKursus3');
Route::get('kursus/4', 'PageController@getKursus4');
Route::get('kursus/5', 'PageController@getKursus5');

// ! hardcoded
Route::get('konten/1/1', 'PageController@getKontenKursus1');
Route::get('konten/1/2', 'PageController@getKontenKursus2');
Route::get('konten/1/3', 'PageController@getKontenKursus3');
Route::get('konten/1/4', 'PageController@getKontenKursus4');
Route::get('konten/1/5', 'PageController@getKontenKursus5');
Route::get('konten/1/6', 'PageController@getKontenKursus6');
// ! hardcoded
Route::get('privat', 'PageController@getPrivat');
Route::get('privat/1', 'PageController@getPrivat1');
Route::get('privat/2', 'PageController@getPrivat2');
Route::get('privat/3', 'PageController@getPrivat3');
Route::get('privat/4', 'PageController@getPrivat4');
Route::get('privat/5', 'PageController@getPrivat5');
// !hardcoded
Route::get('/forum/1', 'PageController@getForumDiskusi');
Route::get('/forum/1/1', 'PageController@getForumDiskusiThread');

Route::get('user-login', 'PageController@getUserlogin');

Route::get('mentor-login', 'PageController@getMentorlogin');

Route::get('user-register', 'PageController@getUserregister');
Route::post('user-register', 'UsersController@Register')->name('users.register');

Route::get('mentor-register', 'PageController@getMentorregister');

Route::get('transaksi', 'PageController@getTransaksi');

Route::get('kursus-ku', 'PageController@getTransaksikursus');

Route::get('privat-ku', 'PageController@getTransaksiprivat');

// ! testing blade dashboard

Route::get('dashboard', 'DashboardPageController@getHome');

Route::get('dashboard/kursus-my', 'DashboardPageController@getKursusSaya');

Route::get('dashboard/buat-kursus', 'DashboardPageController@getBuatKursus');

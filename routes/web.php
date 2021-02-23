<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');

Route::get('/shope', function () {
    return view('shope');
});

Route::get('/daging', function () {
    return view('daging');
});

Route::get('/tukau/administrator', 'App\Http\Controllers\PagesController@loginPage');

Route::middleware('role:admin')->get('/tukau/administrator/index', 'App\Http\Controllers\PagesController@dashboard')->name('dashboard');

Route::middleware('role:admin')->get('/tukau/administrator/user', 'App\Http\Controllers\UserController@index')->name('manageUser');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::middleware('role:admin')->post('/tukau/administrator/user/{id}/update', 'App\Http\Controllers\UserController@update');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/delete', 'App\Http\Controllers\UserController@destroy');

// Route::get('/', 'PagesController@home');
// Route::get('/shope', 'PagesController@shope');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

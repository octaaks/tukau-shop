<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PagesController;
// use App\Http\Controllers\UploadController;

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

Route::get('/daging', function () {
    return view('daging');
});

Route::get('/shop/{slug}', 'App\Http\Controllers\PagesController@shop');

Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show');
Route::get('/search', 'App\Http\Controllers\PagesController@search');

Route::get('/tukau/administrator', 'App\Http\Controllers\PagesController@loginPage');

Route::middleware('role:admin')->get('/tukau/administrator/index', 'App\Http\Controllers\PagesController@dashboard')->name('dashboard');

Route::middleware('role:admin')->get('/tukau/administrator/user', 'App\Http\Controllers\UserController@index')->name('manageUser');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::middleware('role:admin')->post('/tukau/administrator/user/{id}/update', 'App\Http\Controllers\UserController@update');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/delete', 'App\Http\Controllers\UserController@destroy');

//product

Route::middleware('role:admin')->get('/tukau/administrator/product', 'App\Http\Controllers\ProductController@index')->name('manageProduct');
Route::middleware('role:admin')->get('/tukau/administrator/product/create', 'App\Http\Controllers\ProductController@create');
Route::middleware('role:admin')->post('/tukau/administrator/product/store', 'App\Http\Controllers\ProductController@store');
Route::middleware('role:admin')->get('/tukau/administrator/product/{id}/edit', 'App\Http\Controllers\ProductController@edit');
Route::middleware('role:admin')->post('/tukau/administrator/product/{id}/update', 'App\Http\Controllers\ProductController@update');
Route::middleware('role:admin')->get('/tukau/administrator/product/{id}/delete', 'App\Http\Controllers\ProductController@destroy');

// Route::get('/', 'PagesController@home');
// Route::get('/shope', 'PagesController@shope');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upload', 'App\Http\Controllers\UploadController@upload');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@proses_upload');
// hapus file
Route::get('/upload/hapus/{id}', 'App\Http\Controllers\UploadController@hapus');

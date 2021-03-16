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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'PagesController@home')->name('home');

Route::get('/shop/{slug}', 'PagesController@shop');
Route::get('/add-to-cart/{product}', 'CartController@add')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/cart/update/{id}', 'CartController@update')->middleware('auth');
Route::get('/cart/destroy/{id}', 'CartController@destroy')->middleware('auth');


Route::get('/product/{id}', 'ProductController@show');
Route::get('/search', 'PagesController@search');

Route::get('/tukau/administrator', 'PagesController@loginPage');

Route::middleware('role:admin')->get('/tukau/administrator/index', 'PagesController@dashboard')->name('dashboard');

Route::middleware('role:admin')->get('/tukau/administrator/user', 'UserController@index')->name('manageUser');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/edit', 'UserController@edit');
Route::middleware('role:admin')->post('/tukau/administrator/user/{id}/update', 'UserController@update');
Route::middleware('role:admin')->get('/tukau/administrator/user/{id}/delete', 'UserController@destroy');

//product

Route::middleware('role:admin')->get('/tukau/administrator/product', 'ProductController@index')->name('manageProduct');
Route::middleware('role:admin')->get('/tukau/administrator/product/create', 'ProductController@create');
Route::middleware('role:admin')->post('/tukau/administrator/product/store', 'ProductController@store');
Route::middleware('role:admin')->get('/tukau/administrator/product/{id}/edit', 'ProductController@edit');
Route::middleware('role:admin')->post('/tukau/administrator/product/{id}/update', 'ProductController@update');
Route::middleware('role:admin')->get('/tukau/administrator/product/{id}/delete', 'ProductController@destroy');

// Route::get('/', 'PagesController@home');
// Route::get('/shope', 'PagesController@shope');

Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
// hapus file
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

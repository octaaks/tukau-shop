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

//cart
Route::get('/add-to-cart/{product}', 'CartController@add')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/cart/update/{id}', 'CartController@update')->middleware('auth');
Route::get('/cart/destroy/{id}', 'CartController@destroy')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->middleware('auth');

//order
Route::post('/order/store', 'OrderController@store')->middleware('auth')->name('order.store');
Route::middleware('role:admin')->get('/order/{id}', 'OrderController@show')->middleware('auth');
Route::middleware('role:admin')->get('/orderView/{id}', 'OrderController@showOnly')->middleware('auth');
Route::middleware('role:admin')->get('/order/{id}/cancel', 'OrderController@cancel')->middleware('auth');
Route::middleware('role:admin')->get('/order/{id}/proccess', 'OrderController@proccess')->middleware('auth');

// Route::get('/login', 'PagesController@loginPage')->name('login');
Route::middleware('role:admin')->get('/tukau/administrator/index', 'PagesController@dashboard')->name('dashboard');
Route::middleware('role:admin')->get('/order_pending', 'PagesController@pending')->middleware('auth')->name('pending');
Route::middleware('role:admin')->get('/order_cancelled', 'PagesController@cancelled')->middleware('auth')->name('cancelled');
Route::middleware('role:admin')->get('/order_proccessed', 'PagesController@proccessed')->middleware('auth')->name('proccessed');

//shop
Route::get('/shop/{slug}', 'PagesController@shop');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/search', 'PagesController@search');


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

//profile page
Route::get('/profile', 'PagesController@profile');
Route::post('/profile/update', 'PagesController@updateProfile');

// Route::get('/', 'PagesController@home');
// Route::get('/shope', 'PagesController@shope');

Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
// hapus file
Route::get('/upload/hapus/{id}', 'UploadController@hapus');
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

Route::get('/', function () {
    return view('welcome');
});


    
// Route::get('/', 'FrontController@index');
Route::get('new', 'FrontController@new');
Route::get('/', 'FrontController@index1');

Route::get('contact', 'FrontController@contact');

Route::get('about', 'FrontController@about');

Route::get('terms', 'FrontController@terms');
Route::get('services', 'FrontController@services');
Route::get('faqs', 'FrontController@faqs');
Route::get('register', 'FrontController@register');


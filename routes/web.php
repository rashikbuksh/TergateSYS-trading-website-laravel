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

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/companies', function () {
    return view('companies');
});

Route::get('/updates', function () {
    return view('updates');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/portal', function () {
    return view('portal');
});
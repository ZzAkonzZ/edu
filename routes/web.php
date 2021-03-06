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

//views
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//nethods
Route::post('/register', 'auth\UsersController@registerUser');

Route::post('/login', 'auth\UsersController@loginUser');

Route::get('/logout', 'auth\UsersController@logoutUser')->name('logout');

<?php

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
    return view('index');
})->name('index');

Route::get('/contest', function () {
    return view('contest');
})->name('contest');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/problems', function () {
    return view('problems');
})->name('problems');
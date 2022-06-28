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
    $comic_array = config('comic');
    $data = ['comic_array' => $comic_array];
    return view('home', $data);
})->name('homepage');

Route::get('/single-comic', function() {
    return view('single-comic');
})->name('single-comic');

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
    $page_title = "Hello World";
    return view('home', compact('page_title'));
})->name('home');

Route::get('/about', function () {
    $about_title = "Welcome to About page";
    return view('about', compact('about_title'));
})->name('about');

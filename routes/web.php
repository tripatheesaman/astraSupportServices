<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about-us');
})->name('about-us');
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/ndis', function () {
    return view('ndis');
})->name('ndis');

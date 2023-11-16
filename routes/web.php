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
    $message = 'Hello World';
    return view('home', compact('message'));
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/services', function () {
    return view('services');
});


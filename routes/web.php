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
});

Route::get('/homo', function () {
    return 'welcome';
});

Route::get('/hom', function () {
    return 'welcome to my network';
});

Route::get('/hom2', function () {
    return 'welcome to my second network';
});

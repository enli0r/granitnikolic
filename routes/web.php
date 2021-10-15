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
    return view('pages.index');
})->name('home');

Route::get('/galerija', function () {
    return view('pages.galerija');
})->name('galerija');

Route::get('/materijali', function(){
    return view('pages.materijali');
})->name('materijali');


Route::get('/grid', function(){
    return view('pages.grid');
})->name('grid');
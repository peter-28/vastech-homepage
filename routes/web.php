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
    return view('home.index');
})->name('home');

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/features', function () {
    return view('home.features');
})->name('features');

Route::get('/pricing', function () {
    return view('home.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/portofolio', function () {
    return view('home.portofolio');
})->name('portofolio');
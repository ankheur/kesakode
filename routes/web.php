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
    return view('pages.home');
});

Route::get('/roadmap', function () {
    return view('pages.roadmap');
})->name('roadmap');
Route::get('/debuter', function () {
    return view('pages.debuter');
})->name('debuter');
Route::get('/kesakoi', function () {
    return view('pages.kesakoi');
})->name('kesakoi');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

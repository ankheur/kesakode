<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;

use App\Models\Topic;

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
    $topics = Topic::all();
    return view('pages.home', ['topics' => $topics]);
})->name('home');

Route::get('/roadmap', function () {
    return view('pages.roadmap');
})->name('roadmap');
Route::get('/debuter', function () {
    return view('pages.debuter');
})->name('debuter');
Route::get('/kesakoi', function () {
    return view('pages.kesakoi');
})->name('kesakoi');

require __DIR__.'/auth.php';

Route::get('/{category:slug}/{topic:slug}', [TopicController::class, 'show']);
Route::get('/{category:slug}', [CategoryController::class, 'show']);

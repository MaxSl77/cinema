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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\MailController::class, 'contact'])->name('contact');
Route::post('/contact_process', [\App\Http\Controllers\MailController::class, 'contactForm'])->name('contact_process');
Route::get('/movies', [\App\Http\Controllers\MovieController::class, 'index'])->name('movies');
Route::resource('movie', \App\Http\Controllers\MovieController::class);

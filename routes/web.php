<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

Route::get('/email/verify', function () {
   return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Мидлвар который запрещает не подтвержденным пользователям переходить на эти страницы
//Route::middleware('verified')->group(function () {
//
//
//});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\MailController::class, 'contact'])->name('contact');
Route::post('/contact_process', [\App\Http\Controllers\MailController::class, 'contactForm'])->name('contact_process');
Route::get('/movies', [\App\Http\Controllers\MovieController::class, 'index'])->name('movies');
Route::get('/movies/{id}', [\App\Http\Controllers\IndexController::class, 'showMovie'])->name('movies_show');
Route::resource('movie', \App\Http\Controllers\MovieController::class);
Route::get('/sign_up', [\App\Http\Controllers\IndexController::class, 'signUp'])->name('sign_up');
Route::post('/signUp_process', [\App\Http\Controllers\SignUpController::class, 'signUp'])->name('signUp_process');


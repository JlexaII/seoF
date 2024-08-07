<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordConfirmationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\SocialController;

Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);



Route::view('/', 'home')->name('home');
Route::view('/yangilik', 'inc.yangi')->name('yangi');
Route::view('/narxlar', 'inc.narxlar')->name('narx');
Route::view('/biz', 'inc.biz')->name('bizh');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password', [ResetPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('/reset-password', [ResetPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, '__invoke'])
        ->name('verification.send');

    Route::view('/dashboard', 'dashboard')->middleware('verified')
        ->name('dashboard');

    Route::view('/profile', 'profile')
        ->middleware(['verified', 'password.confirm'])
        ->name('profile');

    Route::view('/accept', 'inc.accept')
        ->middleware(['verified'])
        ->name('accept');

    Route::get('/confirm-password', [PasswordConfirmationController::class, 'show'])
        ->name('password.confirm');

    Route::post('/confirm-password', [PasswordConfirmationController::class, 'store']);

    Route::get('/Userprofile', [UserProfileController::class, 'index'])->name('Userprofile');

    Route::post('/Userprofile', [UserProfileController::class, 'store']);

    Route::get('/Post', [PostController::class, 'create'])->name('Post');

    Route::post('/Post', [PostController::class, 'store']);

    Route::get('/Kategoriya', [CategoryController::class, 'index'])->name('Category');

    Route::post('/Kategoriya', [CategoryController::class, 'create']);

    Route::get('/Moderasiya', [PostController::class, 'show'])->name('moderation');

    Route::post('/Moderasiya', [PostController::class, 'update']);
});

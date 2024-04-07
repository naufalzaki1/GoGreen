<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/users', [AdminController::class, 'users'])->name('dashboard.users');
    Route::get('/donations', [AdminController::class, 'donations'])->name('dashboard.donations');
    Route::get('/galleries', [AdminController::class, 'galleries'])->name('dashboard.galleries');
    Route::get('/blogs', [AdminController::class, 'blogs'])->name('dashboard.blogs');
});

Route::controller(DashboardController::class)->middleware(['auth'])->prefix('/dashboard')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
});

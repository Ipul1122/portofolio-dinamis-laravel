<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Middleware\AdminAuth;

// Halaman utama (user)
Route::get('/', function () {
    return view('user.index');
})->name('user.home');

// Halaman login admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Grup route admin yang dilindungi
Route::middleware(['admin.auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/hero-section', function () {
        return view('admin.heroSection.index');
    })->name('admin.hero.index');

    Route::get('/admin/about', function () {
        return view('admin.about.index');
    })->name('admin.about.index');

    Route::get('/admin/skill', function () {
        return view('admin.skill.index');
    })->name('admin.skill.index');

    Route::get('/admin/contact', function () {
        return view('admin.contact.index');
    })->name('admin.contact.index');
});

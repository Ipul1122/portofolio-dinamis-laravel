<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

// Halaman utama (user)
Route::get('/', function () {
return view('user.index');
})->name('user.home');

// Halaman login admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Group route admin dengan pengecekan session
Route::middleware(['web'])->group(function () {

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }
    return view('admin.dashboard');
})->name('admin.dashboard');

// Admin - Hero Section
Route::get('/admin/hero-section', function () {
    return view('admin.heroSection.index');
})->name('admin.hero.index');

// Admin - About Section
Route::get('/admin/about', function () {
    return view('admin.about.index');
})->name('admin.about.index');

// Admin - Skill Section
Route::get('/admin/skill', function () {
    return view('admin.skill.index');
})->name('admin.skill.index');

// Admin - Contact Section
Route::get('/admin/contact', function () {
    return view('admin.contact.index');
})->name('admin.contact.index');

});

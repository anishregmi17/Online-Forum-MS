<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommunitiesController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Home Page
Route::get('/home', [TemplateController::class, 'index']);

// Admin Panel
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.layouts.main');
    })->name('dashboard');

    // Categories
    Route::resource('communities', communitiesController::class);

    // Posts
    Route::resource('posts', PostController::class);
});

// Test Route
Route::get('/admin/test', function () {
    return view('admin.test');
});


<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommunitiesController;
use App\Http\Controllers\AboutForumController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContentPolicyController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserAgreementController;

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Welcome route
Route::get('/', function () {
    return view('welcome');
});

// Home route protected by authentication middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [TemplateController::class, 'index'])->name('home');

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Panel routes protected by authentication middleware
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.layouts.main');
    })->name('index');

    // Test route
    Route::get('/test', function () {
        return view('admin.test');
    })->name('test');

    // Post resource routes
    Route::resource('posts', PostController::class);

    // Categories resource routes
    Route::resource('communities', CommunitiesController::class);
});

// route for about forum
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('aboutforum', AboutForumController::class);
});

// route for privacy policy
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('privacypolicy', PrivacyPolicyController::class);
});

// route for content policy

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('contentpolicy', ContentPolicyController::class);
});

// route for user agreement
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('useragreements', UserAgreementController::class);
});


// Authentication routes
require __DIR__.'/auth.php';

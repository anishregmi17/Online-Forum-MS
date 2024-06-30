<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AboutForumController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContentPolicyController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserAgreementController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;

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
    Route::get('/', [HomeController::class, 'documentation'])->name('index'); // Update this line

    // Test route
    Route::get('/test', function () {
        return view('admin.test');
    })->name('test');

    // Post resource routes
    Route::resource('posts', PostController::class);

    // Other admin routes
    Route::resource('aboutforum', AboutForumController::class);
    Route::resource('privacypolicy', PrivacyPolicyController::class);
    Route::resource('contentpolicy', ContentPolicyController::class);
    Route::resource('useragreements', UserAgreementController::class);
    Route::resource('communities', CommunityController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('footers', FooterController::class);
    Route::resource('settings', SettingController::class);
});

// Route for documentation page
Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');



Route::get('/aboutforum', function () {
    return view('frontend.aboutforum');
})->name('aboutforum');

// Authentication routes
require __DIR__.'/auth.php';

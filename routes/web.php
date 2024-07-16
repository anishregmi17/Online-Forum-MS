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
use App\Http\Controllers\PopularController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FrpostController;

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Welcome route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Home route protected by authentication middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [TemplateController::class, 'home'])->name('home');

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
    Route::get('/', [HomeController::class, 'documentation'])->name('index');

    // Test route
    Route::get('/test', function () {
        return view('admin.test');
    })->name('test');

    // Resource routes

    Route::resource('posts', PostController::class);
    Route::resource('technologies', TechnologyController::class);
    Route::resource('sports', SportController::class);
    Route::resource('aboutforum', AboutForumController::class);
    Route::resource('populars', PopularController::class);
    Route::resource('privacypolicy', PrivacyPolicyController::class);
    Route::resource('contentpolicy', ContentPolicyController::class);
    Route::resource('useragreements', UserAgreementController::class);
    Route::resource('communities', CommunityController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('footers', FooterController::class);
    Route::resource('settings', SettingController::class);
});

// Public routes
Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');
Route::get('/aboutforum', [TemplateController::class, 'aboutForum'])->name('aboutforum');
Route::get('/popular', [TemplateController::class, 'popular'])->name('popular');
Route::get('/contentpolicy', [TemplateController::class, 'contentpolicy'])->name('contentpolicy');
Route::get('/privacypolicy', [TemplateController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/useragreement', [TemplateController::class, 'useragreement'])->name('useragreement');
Route::get('/technology', [TemplateController::class, 'technology'])->name('technology');
Route::get('/sports', [TemplateController::class, 'sports'])->name('sports');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/create', [App\Http\Controllers\FrpostController::class, 'create'])->name('create');

// Authentication routes
require __DIR__ . '/auth.php';

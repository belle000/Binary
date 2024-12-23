<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;


// Default route (welcome page)
Route::get('/', function () {
    return view('welcome');
});


// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');


// Post routes for login and register
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Select Major Page (Redirected after login)
Route::get('/select-major', [LibraryController::class, 'selectMajor'])->name('select-major');


// Logout route (only one logout route is needed)
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Dashboard route (After login, redirect here) (Del151004 Changed This so dashboard is directly major 1)
// Route::get('/dashboard', [LibraryController::class, 'selectMajor'])->name('dashboard');
Route::get('/dashboard', [LibraryController::class, 'showMajor'])->defaults('id', 1)->name('dashboard');

// Major routes
Route::get('/major/{id}', [LibraryController::class, 'showMajor'])->name('major');

// Semester routes (for each major and semester)
Route::get('/dashboard/semester{id}/semester/{semester}', [LibraryController::class, 'showSubjects'])->name('semester');

// Subject routes (for each subject)
Route::get('/subject/{id}', [LibraryController::class, 'showBooks'])->name('subject');

// Home route (After login, can be used to redirect to major selection)
Route::get('/home', [LibraryController::class, 'selectMajor'])->name('home');

// Profile page route (accessible from home/dashboard)
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');

// Update profile route
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Change password form route (show the change password form)
Route::get('/profile/password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.password');

// Update password route (for handling password change)
Route::put('/profile/password', [ProfileController::class, 'changePassword'])->name('profile.password.update');

// Search Function (Del151004)
//Search Route Del151004
Route::get('/search', [LibraryController::class, 'search'])->name('library.search');
// Route::get('/books/search', [LibraryController::class, 'search'])->name('books.search');
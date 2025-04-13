<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Landing Route (Handles redirection based on login role)
Route::get('/', function () {
    return view('guest.home');
})->name('home');

// Guest Routes (users not logged in)
Route::middleware('guest')->group(function() {
    Route::get('/cars', [GuestController::class, 'cars'])->name('cars');
    Route::get('/booking', [GuestController::class, 'booking'])->name('booking');
    Route::get('/contacts', [GuestController::class, 'contacts'])->name('contacts');
});

// Authenticated User Routes
Route::middleware(['auth', 'verified'])->group(function () {

    // Customer Specific Routes
    Route::middleware('role:Customer')->prefix('customer')->name('customer.')->group(function () {
        Route::get('/home', [CustomerController::class, 'home'])->name('home');
    });

    // Employee Specific Routes
    Route::middleware('role:Employee')->prefix('employee')->name('employee.')->group(function () {
        Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
    });

});

require __DIR__.'/auth.php';
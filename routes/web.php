<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('customers')->middleware('auth')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers');
    Route::get('/add', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/{customer}', [CustomerController::class, 'show'])->name('customer.show');
    Route::patch('/{customer}', [CustomerController::class, 'update'])->name('customer.update');
});


require __DIR__.'/auth.php';

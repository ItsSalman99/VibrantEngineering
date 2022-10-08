<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/machines', [MachineController::class, 'index'])->name('machines');
Route::get('/machines/{id}', [MachineController::class, 'show'])->name('machines.detail');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');
Route::get('/terms-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::group(['prefix' => 'admin'], function ()
{
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-machines', [MachineController::class, 'allMachines'])->name('machine.index');
    Route::get('/machines/create', [MachineController::class, 'create'])->name('machine.create');
    Route::post('/machines/store', [MachineController::class, 'store'])->name('machine.store');
});

require __DIR__.'/auth.php';

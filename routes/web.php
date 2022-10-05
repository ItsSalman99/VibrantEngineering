<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/machines', [HomeController::class, 'machines'])->name('machines');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

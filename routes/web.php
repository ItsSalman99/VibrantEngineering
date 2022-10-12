<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\SparePartsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/machines', [MachineController::class, 'index'])->name('machines');
Route::get('/machines/{id}', [MachineController::class, 'show'])->name('machines.detail');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');
Route::get('services/sealing-machines', [HomeController::class, 'sealing'])->name('services.sealing');
Route::get('services/packaging-machines', [HomeController::class, 'packaging'])->name('services.packaging');
Route::get('services/filling-machines', [HomeController::class, 'filling'])->name('services.filling');
Route::get('services/badge-machines', [HomeController::class, 'badgePrinters'])->name('services.badge');

Route::get('spare-parts', [SparePartsController::class, 'index'])->name('sparepart.index');

Route::get('/terms-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    // Machine Work Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-machines', [MachineController::class, 'allMachines'])->name('machine.index');
    Route::get('/machines/create', [MachineController::class, 'create'])->name('machine.create');
    Route::post('/machines/store', [MachineController::class, 'store'])->name('machine.store');
    Route::get('machines/edit/{id}', [MachineController::class, 'edit'])->name('machine.edit');
    Route::post('machines/update/{id}', [MachineController::class, 'update'])->name('machine.update');
    Route::get('machines/destroy/{id}', [MachineController::class, 'destroy'])->name('machine.destroy');
    Route::get('machines/trash', [MachineController::class, 'trash'])->name('machine.trash');
    Route::get('machines/trash/restore/{id}', [MachineController::class, 'restoreTrash'])->name('machine.restore-trash');
    Route::get('machines/delete/permanenty/{id}', [MachineController::class, 'forceDelete'])->name('machine.force-delete');

    // Spare Parts Route
    Route::get('spare-parts', [SparePartsController::class, 'allSpareParts'])->name('spareparts.index');
    Route::get('/spare-parts/create', [SparePartsController::class, 'create'])->name('spareparts.create');
    Route::post('/spare-parts/store', [SparePartsController::class, 'store'])->name('spareparts.store');

});

require __DIR__ . '/auth.php';

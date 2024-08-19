<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\LightDeviceController;
use App\Http\Controllers\TemperatureSensorController;
use App\Http\Controllers\SecurityDeviceController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Add profile edit for admin.
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


// Devices Route
Route::resource('light-devices', LightDeviceController::class)->middleware('auth');
Route::resource('temperature-sensors', TemperatureSensorController::class)->middleware('auth');
Route::resource('security-devices', SecurityDeviceController::class)->middleware('auth');

//Route to Add a new device
Route::get('/create-device', function () {
    return view('create');
})->name('create');

//Route to Edit a device
Route::get('/edit-device', function () {
    return view('edit');
})->name('edit');

require __DIR__.'/admin-auth.php';

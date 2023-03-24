<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth:admin', 'verified'])->name('index');

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('vendor', VendorController::class)->middleware(['auth:admin', 'verified']);

Route::prefix('expired_vendor')->middleware('auth:admin')->group(function() {
    Route::get('index', [VendorController::class, 'expiredVendorIndex'])->name('expired_vendor.index');
    Route::get('restore/{vendor}', [VendorController::class, 'expiredVendorRestore'])->name('expired_vendor.restore');
    Route::post('destroy/{vendor}', [VendorController::class, 'expiredVendorDestroy'])->name('expired_vendor.destroy');
});

require __DIR__.'/admin_auth.php';

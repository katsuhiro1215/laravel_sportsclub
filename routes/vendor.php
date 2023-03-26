<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\Vendor\UserController;
use App\Http\Controllers\EventController;

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

// Vendor Top Route
Route::get('/dashboard', function () {
    return view('vendor.index');
})->middleware(['auth:vendor', 'verified'])->name('index');

Route::middleware('auth:vendor')->group(function () {
    // Vendor Profile Route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Club Route
    Route::resource('/club', ClubController::class);
    // User Route
    Route::resource('/user', UserController::class);
    Route::prefix('expired_user')->group(function() {
        Route::get('index', [UserController::class, 'expiredUserIndex'])->name('expired_user.index');
        Route::get('restore/{user}', [UserController::class, 'expiredUserRestore'])->name('expired_user.restore');
        Route::post('destroy/{user}', [UserController::class, 'expiredUserDestroy'])->name('expired_user.destroy');
    });
    // Event Route
    Route::get('event/past', [EventController::class, 'past'])->name('events.past');
    Route::resource('event', EventController::class);
});


require __DIR__.'/vendor_auth.php';

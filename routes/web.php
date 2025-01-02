<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\tentangcontroller;
use App\Models\PaymentMethod;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/contents', [ContentsController::class, 'index']);
Route::get('/', [ContentsController::class, 'index']);

// Route::get('/donation/{id}', [DonationController::class, 'getDonationById']);
Route::get('/get-donasi-details/{id}', [ContentsController::class, 'getDonasiDetails']);

Route::get('/select-payment-method', [ContentsController::class, 'getPaymentMethod'])->name('select-payment-method');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('images', ImageController::class);
// });

// Route::get('/', function () {
//     return view('landingpage'); 
// });
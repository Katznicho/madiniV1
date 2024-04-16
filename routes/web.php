<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlaceOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('welcome', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');



Route::resource("products", ProductController::class);
// Route::get("products/{id}", [ProductController::class, "show"])->name("products.show");
Route::get("products", [ProductController::class, "index"])->name("product_details");
// Route::get("productCheckout", [ProductController::class , "productCheckout"])->name("productCheckout");
Route::get("productCheckout/{product}", [ProductController::class , "productCheckout"])->name("productCheckout");

Route::post('placeOrder', [PlaceOrderController::class, 'placeOrder'])->name('placeOrder');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// payment routes
Route::get("finishPayment", [PaymentController::class, "finishPayment"])->name("finishPayment");
Route::get("cancelPayment", [PaymentController::class, "cancelPayment"])->name("cancelPayment");

require __DIR__.'/auth.php';

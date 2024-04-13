<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("registerIPN", [PaymentController::class, "registerIPN"]);
Route::get("listIPNS", [PaymentController::class, "listIPNS"]);
Route::get("completePayment", [PaymentController::class, "completePayment"]);
Route::post("processOrder", [PaymentController::class, "processOrder"]);

Route::post("testSendingMessages", [PaymentController::class, "testSendingMessages"]);

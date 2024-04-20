<?php

use App\Http\Controllers\Api\V1\AdvertisementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('ads', [AdvertisementController::class, 'index']);
    Route::get('ads/{advertisement}', [AdvertisementController::class, 'show']);
});


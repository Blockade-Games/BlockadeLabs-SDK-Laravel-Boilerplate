<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SkyboxController;
use App\Http\Controllers\API\ImagineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    // Skyboxes
    Route::get('skybox/styles', [SkyboxController::class, 'getSkyboxStyles']);
    Route::post('skybox', [SkyboxController::class, 'generateSkybox']);

    // Imagine Requests
    Route::get('generators', [ImagineController::class, 'getGenerators']);
    Route::post('imagine/requests', [ImagineController::class, 'generateImagine']);
    Route::get('imagine/requests/{id}', [ImagineController::class, 'getImagineById']);
    Route::get('imagine/requests/obfuscated-id/{obfuscatedId}',
        [ImagineController::class, 'getImagineByObfuscatedId']);
    Route::get('imagine/myRequests', [ImagineController::class, 'getImagineHistory']);
    Route::delete('imagine/requests/{id}', [ImagineController::class, 'cancelImagine']);
    Route::delete('imagine/requests/pending', [ImagineController::class, 'cancelAllPendingImagines']);
    Route::delete('imagine/deleteImagine/{id}', [ImagineController::class, 'deleteImagine']);
});



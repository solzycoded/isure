<?php

use App\Http\Controllers\Api\I1\InsuranceController;
use App\Http\Controllers\Api\I1\InsuranceCoverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('i1')->group(function(){
    Route::apiResource('/insurance-policies', InsuranceController::class);
    Route::apiResource('/insurance-policy-covers', InsuranceCoverController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
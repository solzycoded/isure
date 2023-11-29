<?php

use App\Http\Controllers\InsurancePolicyController;
use App\Http\Controllers\InsurancePolicyCoverController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/insurance-policies/{insurancePolicy:name}-insurance/create', [InsurancePolicyCoverController::class, 'create']);
Route::post('/insurance-policies/{insurancePolicy:name}-insurance/create', [InsurancePolicyCoverController::class, 'store']);
Route::delete('/insurance-cover/delete/{insuranceCover:id}', [InsurancePolicyCoverController::class, 'destroy']);

Route::get('/{insurancePolicy:name}-insurance/edit', [InsurancePolicyController::class, 'edit']);
Route::patch('/insurance-policies/{insurancePolicy:name}-insurance', [InsurancePolicyController::class, 'update']);

Route::get('/', [InsurancePolicyController::class, 'index']);
Route::get('/insurance-policies', [InsurancePolicyController::class, 'index']);

// Route::get('/insurance-policies/{insurancePolicy:name}-insurance', [InsurancePolicyController::class, 'find']);
Route::get('/insurance-policies/covers/{type}', [InsurancePolicyCoverController::class, 'index']);
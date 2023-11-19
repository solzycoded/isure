<?php

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

Route::get('/dashboard/home-insurance', function () {
    return view('dashboard.homeinsurance.index');
});

Route::get('/dashboard/home-insurance/create', function () {
    return view('dashboard.homeinsurance.create');
});

Route::get('/', function () {
    return view('dashboard.homeinsurance.index');
});
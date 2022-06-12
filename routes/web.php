<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('notice', function () {
    return view('pages.notice');
});
Route::get('dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('dashboard/home', function () {
    return view('pages.dashboard.home');
});

Route::get('dashboard/registration',[AuthController::class,'registration']);
Route::get('dashboard/login',[AuthController::class,'login']);
Route::post('dashboard/store',[AuthController::class,'store']);
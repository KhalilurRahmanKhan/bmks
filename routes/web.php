<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProjectController;

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
Route::get('frontend/notice', function () {
    return view('pages.notice');
});
Route::get('dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('dashboard/home', function () {
    return view('pages.dashboard.home');
});

Route::get('/registration',[AuthController::class,'registration']);
Route::get('/admin/view',[AuthController::class,'adminView']);
Route::post('/store',[AuthController::class,'store']);
Route::get('dashboard/login',[AuthController::class,'login']);
Route::get('/login',[AuthController::class,'userlogin']);
Route::post('login',[AuthController::class,'authenticate']);
Route::post('logout',[AuthController::class,'userlogout']);
Route::post('dashboard/check',[AuthController::class,'check']);
Route::post('dashboard/logout',[AuthController::class,'logout']);


Route::get('slider',[SliderController::class,'index']);
Route::post('slider/store',[SliderController::class,'store']);



Route::resource('notice', NoticeController::class);
Route::resource('project', ProjectController::class);

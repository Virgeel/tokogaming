<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/',[DashboardController::class,'landing']);
Route::get('/createproduk',[DashboardController::class,'create']);
Route::post('/create',[DashboardController::class,'store']);
Route::delete('/deleteproduk/{id}',[DashboardController::class,'destroy']);
Route::get('/dashboard/{id}/edit',[DashboardController::class,'edit']);
Route::post('/dashboard/{id}/edit',[DashboardController::class,'update']);



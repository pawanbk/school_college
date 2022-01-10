<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApiController;

Route::get('/',[DashboardController::class,'index']);
Route::get('/setting',[DashboardController::class,'common']);

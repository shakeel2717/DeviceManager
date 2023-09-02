<?php

use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\NumberController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('/', DashboardController::class);
    Route::resource('/messages', MessageController::class);
    Route::resource('/numbers', NumberController::class);
    Route::resource('/countries', CountryController::class);

});

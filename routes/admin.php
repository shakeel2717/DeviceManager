<?php

use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\NumberController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('/', DashboardController::class);
    Route::get('/battery_level/{from}/{to}', [DeviceController::class, 'battery_level'])->name('device.battery_level');
    Route::resource('/device', DeviceController::class);
});

<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','/admin');

Route::post('/api/webhook/sms', [WebHookController::class, 'sms'])->name('webhook.sms');


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

<?php

use App\Modules\Slider\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('sliders', Controller::class);
    Route::post('sliders/bulk-action', [Controller::class, 'bulkAction']);
});
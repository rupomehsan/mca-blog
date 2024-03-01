<?php

use App\Modules\Contactus\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('contactuses', Controller::class);
    Route::post('contactuses/bulk-action', [Controller::class, 'bulkAction']);
});
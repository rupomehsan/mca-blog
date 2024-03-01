<?php

use App\Modules\User\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('users', Controller::class);
    Route::post('users/bulk-action', [Controller::class, 'BulkActions']);
    Route::post('users/profile-update', [Controller::class, 'ProfileUpdate']);
});

<?php

use App\Modules\CourseManagement\Course\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('courses', Controller::class);
    Route::post('courses/bulk-action', [Controller::class, 'bulkAction']);
});
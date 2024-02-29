<?php

use App\Modules\WebsiteSetting\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('website-settings', Controller::class);
    Route::post('website-settings/bulk-action', [Controller::class, 'bulkAction']);
    Route::get('dashboard-analytics', [Controller::class, 'dashboardAnalytics']);
    Route::post('contact-info-submit', [Controller::class, 'contactInfoSubmit']);
});

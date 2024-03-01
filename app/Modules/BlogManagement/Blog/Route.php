<?php

use App\Modules\BlogManagement\Blog\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('blogs', Controller::class);
    Route::post('blogs/bulk-action', [Controller::class, 'bulkAction']);
});

Route::prefix('v1')->group(function () {
    Route::post('blog-comment', [Controller::class, 'blogComment']);
    Route::get('get-blog-comment-by-blog-id/{slug}', [Controller::class, 'getBlogCommentByBlogId']);
});

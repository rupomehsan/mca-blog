<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front end Web Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('visitorCount')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [App\Http\Controllers\Frontend\HomeController::class, 'aboutus'])->name('about_us');
    Route::get('/contact', [App\Http\Controllers\Frontend\HomeController::class, 'contact'])->name('contact');
    Route::get('/blog', [App\Http\Controllers\Frontend\HomeController::class, 'blog'])->name('blog');
    Route::get('/blog/details/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'blogDetails'])->name('blog.details');
    Route::get('/course', [App\Http\Controllers\Frontend\HomeController::class, 'course'])->name('course');
    Route::get('/course/details/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'courseDetails'])->name('course.details');
    Route::get('/login', [App\Http\Controllers\Frontend\HomeController::class, 'login'])->name('login');
});
Route::get('/not-found', [App\Http\Controllers\Frontend\HomeController::class, 'notFound'])->name('not-found');
/*
|--------------------------------------------------------------------------
| Backend   Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Auth::routes();
/*
|--------------------------------------------------------------------------
| artisan command
|--------------------------------------------------------------------------
|
*/
Route::get('call/migrate', function () {
    // dd($_ENV);
    \Illuminate\Support\Facades\Artisan::call('db:refresh');
});

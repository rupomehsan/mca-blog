<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    static $model = \App\Modules\WebsiteSetting\Model::class;
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = self::$model::pluck('field_value', 'field_title')->toArray();
        view()->share('web_settings', $settings);
        Paginator::useBootstrap();
    }
}

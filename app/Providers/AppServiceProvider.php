<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share([
            'web_name' => 'TOPAP',
            'web_logo' => 'assets/img/logo.webp',
            'web_logo_hor' => 'assets/img/logo_hor.webp',
            'web_url' => 'http://127.0.0.1:8000/',
        ]);
    }
}

<?php

namespace Thangbeo\Languages;

use Illuminate\Support\ServiceProvider;

class TranslateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        include __DIR__.'/model/language.php';
        include __DIR__.'/controller/TranslateController.php';
        $this->publishes([__DIR__.'/public/build' => public_path('build'),], 'public');
        $this->publishes([__DIR__.'/public/vendors' => public_path('vendors'),], 'vendors');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'translate');
    }
}

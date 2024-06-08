<?php

namespace Gardevoir\Providers;

use Illuminate\Support\ServiceProvider;

class GardevoirServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gardevoir'];
    }

    /**
     * Boot
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'gardevoir');
    }

    /**
     * Register
     */
    public function register()
    {
        //
    }

    /**
     * Register publishing
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../../config/gardevoir.php' => config_path('gardevoir.php')
        ], 'gardevoir-config');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/gardevoir')
        ], 'gardevoir-views');
    }
}

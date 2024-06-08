<?php

namespace Gardevoir\Providers;

use Illuminate\Support\ServiceProvider;

class GardevoirServiceProvider extends ServiceProvider
{
    /**
     * Boot
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->registerPublishing();
        }
    }

    /**
     * Register
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('gardevoir');
    }

    /**
     * Register publishing
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../../config/gardevoir.php' => config_path('gardevoir.php')
        ], 'gardevoir-config');
    }
}

<?php

namespace Trinity\Providers;

use Illuminate\Support\ServiceProvider;

class TrinityServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['trinity'];
    }

    /**
     * Boot
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'trinity');
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
            __DIR__ . '/../../config/trinity.php' => config_path('trinity.php')
        ], 'trinity-config');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/trinity')
        ], 'trinity-views');
    }
}

<?php

namespace Arash\Logevent;

use Arash\Logevent\Middleware\Logevent;
use Illuminate\Support\ServiceProvider;

class LogeventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        $router->middleware('logevent', Logevent::class);

        // Publish a config file
        $this->publishes([
            __DIR__ . '/config/logevent.php' => config_path('logevent.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/logevent.php', 'logevent'
        );
    }
}

<?php

namespace Khangnhddev\ApiLoggerLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Khangnhddev\ApiLoggerLaravel\Middleware\ApiLoggerMiddleware;

class LaravelApiLoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('api-logger', ApiLoggerMiddleware::class);
    }

    public function register()
    {
        // Register any bindings or other package setup.
    }
}
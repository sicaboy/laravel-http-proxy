<?php

namespace Sicaboy\LaravelHttpProxy;

use Illuminate\Support\ServiceProvider;

class HttpProxyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $app = $this->app;

        $this->bootConfig();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('http-proxy', function ($app) {
            return new HttpProxy(
                $app['config']['http-proxy.protocol'],
                $app['config']['http-proxy.host'],
                $app['config']['http-proxy.port'],
                $app['config']['http-proxy.options']
            );
        });
    }

    /**
     * Booting configure.
     */
    protected function bootConfig()
    {
        $path = __DIR__.'/config/http-proxy.php';

        $this->mergeConfigFrom($path, 'http-proxy');

        if (function_exists('config_path')) {
            $this->publishes([$path => config_path('http-proxy.php')]);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['http-proxy'];
    }
}

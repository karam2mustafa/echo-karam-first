<?php

namespace karam\Commands;

use Illuminate\Support\ServiceProvider;

class KaramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.karam.echo-karam-first' , function ($app){
            return $app['karam\Commands\KaramCommand'];
        });
        $this->commands('command.karam.echo-karam-first');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

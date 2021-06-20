<?php

namespace Redberry\LaravelConsole;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/api.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this
            ->app
            ->make('config')
            ->set('logging.channels.console', [
                'driver' => 'monolog',
                'handler' => LaravelConsoleHandler::class,
            ]);
    }
}
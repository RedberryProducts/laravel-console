<?php

namespace Redberry\LaravelConsole;

use Illuminate\Support\Facades\Event;
use Illuminate\Log\Events\MessageLogged;
use Redberry\LaravelConsole\App\ConsoleLogListener;
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
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            MessageLogged::class,
            ConsoleLogListener::class,
        );
    }
}

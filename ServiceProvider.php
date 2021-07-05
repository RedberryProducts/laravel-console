<?php

namespace Redberry\LaravelConsole;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Blade;
use Redberry\LaravelConsole\App\Logger;
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
        $this->app->singleton('laravel-console.logger', fn () => new Logger());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        # Registering listener for laravel internal logger.

        // Event::listen(
        //     MessageLogged::class,
        //     ConsoleLogListener::class,
        // );
        
        /**
         * Log data.
         */
        Blade::directive('log', function ($item) {
            eval("\$passedItem = $item;");
            console()->log($passedItem);
        }); 
        
        /**
         * Log all the data passed into the view.
         */ 
        Blade::directive('explain', function () {
            return '<?php 
                $viewData = get_defined_vars()["__data"];
                if(isset($viewData["__env"])) 
                {
                    unset($viewData["__env"]);
                }

                if(isset($viewData["app"])) 
                {
                    unset($viewData["app"]);
                }

                if(isset($viewData["errors"])) 
                {
                    unset($viewData["errors"]);
                }

                console()->log($viewData);
            ?>';
        }); 
    }
}

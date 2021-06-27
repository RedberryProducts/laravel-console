<?php

use Redberry\LaravelConsole\App\Logger;

if (!function_exists('console')) {
    
    /**
     * Log message into the laravel console.
     * 
     * @return Logger
     */
    function console()
    {
        return resolve('laravel-console.logger');
    }
}
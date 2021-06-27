<?php

namespace Redberry\LaravelConsole\Facades;

use Redberry\LaravelConsole\App\Logger;

/**
 * @method static void alert($message)
 * @method static void critical($message)
 * @method static void debug($message)
 * @method static void emergency($message)
 * @method static void error($message)
 * @method static void info($message)
 * @method static void log($message)
 * @method static void notice($message)
 * @method static void warning($message)
 *
 * @see \Redberry\LaravelConsole\App\Logger
 */
class Console
{
    /**
     * @return Logger
     */
    public static function __callStatic($name, $arguments)
    {   
        return self::logger()->$name(...$arguments);
    }

    private static function logger()
    {
        return resolve('laravel-console.logger');
    }
}
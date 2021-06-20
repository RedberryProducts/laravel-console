<?php

namespace Redberry\LaravelConsole;

use Monolog\Handler\AbstractProcessingHandler;

class LaravelConsoleHandler extends AbstractProcessingHandler
{
    protected function write(array $log): void
    {
        CacheManager::add($log);
    }
}
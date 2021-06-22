<?php

namespace Redberry\LaravelConsole\Support;

use Monolog\Handler\AbstractProcessingHandler;
use Redberry\LaravelConsole\App\CacheManager;

class LaravelConsoleHandler extends AbstractProcessingHandler
{
    protected function write(array $log): void
    {
        CacheManager::add($log);
    }
}
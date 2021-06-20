<?php

namespace Redberry\LaravelConsole;

use Monolog\Handler\AbstractProcessingHandler;

class LaravelConsoleHandler extends AbstractProcessingHandler
{
    protected function write(array $record): void
    {
        $log = $record['formatted'];
        dd($log);
    }
}
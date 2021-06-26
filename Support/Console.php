<?php

namespace Redberry\LaravelConsole\Support;

class Console
{
    public static function __callStatic($name, $arguments)
    {
        return logger()->$name(...$arguments);
    }
}
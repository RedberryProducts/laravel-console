<?php

namespace Redberry\LaravelConsole\Support;

class console
{
    public static function __callStatic($name, $arguments)
    {
        return logger()->channel('console')->$name(...$arguments);
    }
}
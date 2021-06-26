<?php

namespace Redberry\LaravelConsole\App;

use Illuminate\Support\Facades\Cache;

class CacheManager
{
    const LOG_KEY = 'laravel-console.logs';

    /**
     * Clear previous logs from active bus.
     */
    public static function clear(): void
    {
        Cache::put(self::LOG_KEY, []);
    }

    /**
     * Add log record into the cache.
     */
    public static function add($record): void
    {
        dd($record);
        $logRecords = Cache::get(self::LOG_KEY, []);
        $logRecords[] = $record;
        Cache::put(self::LOG_KEY, $logRecords);
    }

    /**
     * Remembered log records.
     */
    public static function logs(): array
    {
        return Cache::get(self::LOG_KEY, []);
    }
}
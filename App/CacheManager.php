<?php

namespace Redberry\LaravelConsole\App;

use Illuminate\Support\Facades\Cache;

class CacheManager
{
    const LOG_KEY = 'laravel-console.logs';
    const LOG_ID = 'laravel-console.logs.id';

    /**
     * Clear previous logs from active bus.
     */
    public static function clear(): void
    {
        Cache::put(self::LOG_KEY, []);
        self::resetPrimaryKey();
    }

    /**
     * Add log record into the cache.
     */
    public static function add($record): void
    {
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

    /**
     * Increment log index and return the incremented value.
     */
    public static function increment(): int
    {
        return Cache::increment(self::LOG_ID);
    }

    /**
     * Reset logs primary key.
     */
    public static function resetPrimaryKey(): void
    {
        Cache::put(self::LOG_ID, 0);
    }
}
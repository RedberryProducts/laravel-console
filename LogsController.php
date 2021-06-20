<?php

namespace Redberry\LaravelConsole;

class LogsController
{
    /**
     * Get application logs.
     */
    public function getCurrentLogs()
    {
        return CacheManager::logs();
    }

    /**
     * Remove old logs.
     */
    public function removeOldLogs(): void
    {
        CacheManager::clear();
    }
}
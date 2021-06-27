<?php

namespace Redberry\LaravelConsole\App;

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
    public function forget(): void
    {
        CacheManager::clear();
    }

    /**
     * Tell the extensions that the web site is debuggable.
     */
    public function ping()
    {
        return true;
    }
}

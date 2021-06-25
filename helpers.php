<?php

/**
 * Get the console.
 */
if (!function_exists('console')) {
    function console()
    {
        return logger()->channel('console');
    }
}
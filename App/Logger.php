<?php

namespace Redberry\LaravelConsole\App;

class Logger
{
	/**
	 * Log an emergency message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function emergency($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log an alert message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function alert($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log a critical message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function critical($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log an error message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function error($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log a warning message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function warning($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log a notice to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function notice($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log an informational message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function info($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Log an informational message to the logs.
	 *
	 * @param  string  $message
	 * @return void
	 */
	public function log($message)
    	{
        $this->info($message);
	}

	/**
	 * Log a debug message to the logs.
	 *
	 * @param  string  $message
	 * @param  array  $context
	 * @return void
	 */
	public function debug($message)
	{
            $this->writeLog(__FUNCTION__, $message);
	}

	/**
	 * Write log.
	 */
	protected function writeLog($level, $message)
	{
		$trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS & ~DEBUG_BACKTRACE_PROVIDE_OBJECT);
		$consoleLogTrace = $trace[2];

		$id = CacheManager::increment();
		CacheManager::add(
			(new Log($id, $level, $message))->toArray(),
		);
	}
}

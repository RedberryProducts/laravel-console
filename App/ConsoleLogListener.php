<?php

namespace Redberry\LaravelConsole\App;

class ConsoleLogListener
{
	/**
	 * Handle the event.
	 *
	 * @param  object  $event
	 * @return void
	 */
	public function handle($event)
	{
		CacheManager::add($event);
	}
}
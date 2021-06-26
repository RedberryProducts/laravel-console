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
		$id = CacheManager::increment();
		CacheManager::add(
			(new Log($id, $event->level, $event->message))->toArray(),
		);
	}
}
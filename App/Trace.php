<?php

namespace Redberry\LaravelConsole\App;

class Trace
{
    /**
     * Save trace array.
     */
    private array $trace;

    /**
     * Initiate trace object and save data.
     */
    public function __construct(array $trace)
    {
        $this->trace = $trace;
        [
            'line' => $line,
            'file' => $rawFileName, 
        ] = $trace;

        $file = explode(base_path() . '/', $rawFileName)[1];

        $this->line = $line;
        $this->file = $file;
    }

    /**
     * file name.
     */
    public string $file;

    /**
     * line number.
     */
    public int $line;
}

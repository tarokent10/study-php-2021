<?php

declare(strict_types=1);

class Logger
{
    private $filename;
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }
    public function write(string $data)
    {
        file_put_contents($this->filename, $data, FILE_APPEND);
    }

    public function clear(): void
    {
        file_put_contents($this->filename, "");
    }
}

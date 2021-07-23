<?php

declare(strict_types=1);

class Task
{
    public string $name;
    public int $priority;
    public int $progress;

    public function __construct(
        string $name,
        int $priority = 1,
        int $progress = 0
    ) {
        $this->name = $name;
        $this->priority = $priority;
        $this->progress = $progress;
    }

    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}

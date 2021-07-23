<?php

declare(strict_types=1);

class Task
{
    public string $name;
    public int $priority;
    public int $progress;

    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}

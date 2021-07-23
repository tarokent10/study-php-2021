<?php

declare(strict_types=1);

class Task
{
    // オブジェクト定数
    public const PRIORITY_LOW = 0;
    public const PRIORITY_MIDDLE = 1;
    public const PRIORITY_HIGH = 2;

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

    public function getPriorityAsString(): string
    {
        switch ($this->priority) {
            case self::PRIORITY_LOW: // thisではなくてselfなので注意
                return "低";
                break;
            case self::PRIORITY_MIDDLE:
                return "中";
                break;
            case self::PRIORITY_HIGH:
                return "高";
                break;
        }
    }
}

<?php

declare(strict_types=1);

class TaskSheet
{
    public array $tasks = []; // 配列の中身の型保証は言語仕様のみでは不可ぽい。実装でカバーするしかなさげ

    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
        echo $task->name, "を追加しました", PHP_EOL;
    }

    public function show(): void
    {
        foreach ($this->tasks as $task) {
            if ($task->isCompleted()) {
                echo "<b>", $task->name, "</b>", PHP_EOL;
            } else {
                echo $task->name, PHP_EOL;
            }
        }
    }
}

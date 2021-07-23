<?php

declare(strict_types=1);

require_once dirname(__FILE__) . "/Task.php";
require_once dirname(__FILE__) . "/TaskSheet.php";

$task = new Task("パスポートの更新");
$task->progress = 100;

$task2 = new Task("食材の買い出し");
$task2->progress = 50;

$taskSheet = new TaskSheet();
$taskSheet->addTask($task);
$taskSheet->addTask($task2);

echo PHP_EOL, "●タスクリストを表示します...", PHP_EOL;
$taskSheet->show();

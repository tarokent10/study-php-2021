<?php

declare(strict_types=1);
require_once dirname(__FILE__) . "/LoggingTrait.php";

class MemberModel
{
    // useキーワードでトレイとプロパティとメソッドを挿しこめる。
    // カンマ区切りで複数のトレイト利用も可能だがプロパティ重複時はasなどで対処が必要
    use LoggingTrait;
    public function __construct()
    {
        // コメントアウトを外すとトレイトの定義を上書きできる
        // $this->logFileName = "override.log"
    }

    public function create(string $memberId): void
    {
        $this->log("created {$memberId}" . PHP_EOL);
    }

    public function delete(string $memberId): void
    {
        $this->log("deleted {$memberId}" . PHP_EOL);
    }
}

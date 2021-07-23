<?php

declare(strict_types=1);

require_once dirname(__FILE__) . "/Logger.php";

// ログ出力の初期化処理をするトレイト
trait LoggingTrait
{
    private ?Logger $logger = null; // クラスプロパティでnullableなType宣言する場合は?が必要
    private ?string $logFileName = null;

    private function loadLogger(): void
    {
        if ($this->logFileName === null) {
            $this->logFileName = __CLASS__ . ".log";
        }
        $this->logger = new Logger($this->logFileName);
        $this->logger->clear(); // 毎回クリア
    }

    private function log(string $data): void
    {
        if ($this->logger === null) {
            $this->loadLogger();
        }
        $data = date("Y-m-d H:i:s") . " " . $data;
        $this->logger->write($data);
    }
}

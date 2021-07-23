<?php

declare(strict_types=1);

class Sample
{
    private static string $name = "田中太郎";
    public static function getName(): string
    {
        return self::$name; //オブジェクト定数と違い$が必要
    }
}
echo Sample::getName();  // 静的メソッドの呼び出し

<?php

declare(strict_types=1);

require_once dirname(__FILE__) . "/BaseVehicle.php";
class Car extends Vehicle
{
    private int $speed;
    public function __construct(string $orner, string $name)
    {
        $this->speed = 100;
        // Javaと違い、親のコンストラクタは明示的に呼ばないと自動では呼び出されない。
        // ただしコンストラクタ未定義であれば親のコンストラクタで初期化される。
        parent::__construct($orner, $name);
    }
    // override
    public function run(): void
    {
        echo "車(", $this->name, ")が走ります。時速は", strval($this->speed), "km/時";
    }
}

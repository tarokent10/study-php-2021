<?php

declare(strict_types=1);
class TaxCalculator
{
    private float $lastCalculated;

    public function calculate(int $price, float $tax): float
    {
        if ($tax < 0) {
            throw new Exception("税率はマイナスではダメです");
        }
        $this->lastCalculated = $calculated = $price + $price * $tax; // 多重代入
        return $calculated;
    }

    public function reset(): void
    {
        $this->lastCalculated = 0;
    }
}

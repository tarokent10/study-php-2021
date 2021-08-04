<?php

declare(strict_types=1);
require_once dirname(__FILE__) . "/TaxCalculator.php";

$calculator = new TaxCalculator();
$priceWithTax = $calculator->calculate(100, -0.05);
echo "計算結果は", $priceWithTax, "円です", PHP_EOL;

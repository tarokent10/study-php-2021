<?php

declare(strict_types=1);

require_once dirname(__FILE__) . "/BaseVehicle.php";
require_once dirname(__FILE__) . "/Car.php";

$vehicle = new Car("田中太郎", "アルファード");
$vehicle->run();

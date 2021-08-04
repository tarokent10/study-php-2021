<?php

declare(strict_types=1);

abstract class Vehicle
{
    protected string $orner;
    protected string $name;

    public function __construct(string $orner, string $name)
    {
        $this->orner = $orner;
        $this->name = $name;
    }
    public abstract function run(): void;
}

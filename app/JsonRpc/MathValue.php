<?php

declare(strict_types=1);

namespace App\JsonRpc;

class MathValue
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

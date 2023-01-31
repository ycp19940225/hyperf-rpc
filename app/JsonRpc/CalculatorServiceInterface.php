<?php

namespace App\JsonRpc;

interface CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function sum(int $v1, int $v2): int;
}
<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{

    public function sum(int $v1, int $v2): int
    {
        // 这里是服务方法的具体实现
        return $v1 + $v2;
    }
}

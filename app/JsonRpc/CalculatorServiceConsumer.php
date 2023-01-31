<?php

namespace App\JsonRpc;

use Hyperf\RpcClient\AbstractServiceClient;

class CalculatorServiceConsumer extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'CalculatorService';

    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';


    public function sum(int $v1, int $v2): int
    {
        return $this->__request(__FUNCTION__, compact('v1', 'v2'));
    }
}

<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\JsonRpc\CalculatorServiceInterface;
use App\JsonRpc\MathValue;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\Utils\ApplicationContext;

/**
 * @AutoController()
 * @package App\Controller
 */
class IndexController extends AbstractController
{

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function test()
    {
        return [
            'method' => 'sss',
        ];
    }

    public function testRpc()
    {
        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);

        /** @var MathValue $result */
        $result = $client->sum(1, 2);

        var_dump($result);
    }
}

<?php
declare(strict_types=1);

namespace App\Service;

use App\Service\UserServiceClient;
use Hyperf\CircuitBreaker\Annotation\CircuitBreaker;
use Hyperf\Di\Annotation\Inject;

class UserService
{
    /**
     * @Inject
     * @var UserServiceClient
     */
    private $client;

    /**
     * @CircuitBreaker(timeout=0.05, failCounter=1, successCounter=1, fallback="App\Service\UserService::searchFallback")
     */
    public function search($offset, $limit)
    {
        return $this->client->users($offset, $limit);
    }

    public function searchFallback($offset, $limit)
    {
        return [];
    }
}

<?php
declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class RequestHandler
{
    private CONST URL = 'api.openweathermap.org/data/2.5/weather?q=%s&appid=%s';

    /** @var string */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function handle(string $method, string $city): ResponseInterface
    {
        $client = new Client();

        return $client->request($method, sprintf(self::URL, $city, $this->apiKey));
    }
}
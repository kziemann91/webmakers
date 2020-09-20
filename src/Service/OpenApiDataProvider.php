<?php
declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

class OpenApiDataProvider
{
    /** @var RequestHandler */
    private $requestHandler;

    public function __construct(RequestHandler $requestHandler)
    {
        $this->requestHandler = $requestHandler;
    }

    public function getDataByCity(string $city): string
    {
        return $this->requestHandler->handle(Request::METHOD_GET, $city)->getBody()->getContents();
    }
}
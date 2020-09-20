<?php
declare(strict_types=1);

namespace App\Controller;

use App\Service\OpenApiDataProvider;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("city/{city}")
     */
    public function getByCityAction(string $city, OpenApiDataProvider $dataProvider): Response
    {
        return new Response($dataProvider->getDataByCity($city));
    }
}
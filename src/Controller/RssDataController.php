<?php

namespace App\Controller;

use App\Model\Rss;
use App\Service\ControllerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RssDataController extends AbstractController
{
    private const RSS_URL = "https://www.fuelwatch.wa.gov.au/fuelwatch/fuelWatchRSS";


    public function getAllData(ControllerService $controllerService): Response
    {
        $content = file_get_contents(self::RSS_URL);
        $xml = simplexml_load_string($content);
     
        $xmlObject = $controllerService->deserialize($xml->asXML(), new Rss, "xml");

        return $controllerService->baseResponse($xmlObject->getChannel());
    }
}

<?php

namespace App\Controller;

use App\Model\Rss;
use App\Service\ControllerManagerService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FuelRssController extends AbstractController 
{

    public function getAllData(ControllerManagerService $controllerManagerService, DocumentManager $dm): Response {       
            
//$controllerManagerService->serialize($xmlObject, "json")
        return new Response(
            "{}",
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }

}
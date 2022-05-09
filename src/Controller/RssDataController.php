<?php

namespace App\Controller;

use App\Document\Channel;
use App\Service\ControllerManagerService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RssDataController extends AbstractController 
{
    public function getAllData(ControllerManagerService $controllerManagerService, DocumentManager $dm): Response {       
        $repository = $dm->getRepository(Channel::class);
        $items = $repository->findAll();

        return new Response(
            $controllerManagerService->serialize($items, "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }
}
<?php

namespace App\Controller;

use App\Document\Channel;
use App\Service\ControllerService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Enum\RegionCode;

class RssDataController extends AbstractController
{
    public function getAllData(ControllerService $controllerService, DocumentManager $dm): Response
    {
        $repository = $dm->getRepository(Channel::class);
        $items = $repository->findAll();

        return new Response(
            $controllerService->serialize($items, "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }

    public function getLatestData(ControllerService $controllerService, DocumentManager $dm): Response
    {
        $repository = $dm->getRepository(Channel::class);
        $items = null;

        return new Response(
            $controllerService->serialize($items, "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }

    public function getItemsByRegion($region, ControllerService $controllerService, DocumentManager $dm): Response
    {
        $regionCode = RegionCode::tryFrom($region);

        if ($regionCode == null) {
            return $controllerService->baseResponse("{ \"message\": \"Could not find region with that code\" }", null, Response::HTTP_I_AM_A_TEAPOT);
        }

        $repository = $dm->getRepository(Channel::class);
        $items = null;

        return $controllerService->baseResponse($items);
    }
}

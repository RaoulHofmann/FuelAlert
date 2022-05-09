<?php

namespace App\Controller;

use App\Service\ControllerManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Enum\RegionCode;

class EnumDataController extends AbstractController 
{
    public function getAllRegions(ControllerManagerService $controllerManagerService): Response {       
        return new Response(
            $controllerManagerService->serialize(RegionCode::cases(), "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }
}
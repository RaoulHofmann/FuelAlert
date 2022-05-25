<?php

namespace App\Controller;

use App\Service\ControllerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Enum\RegionCode;
use App\Enum\Product;

class EnumDataController extends AbstractController 
{
    public function getAllRegions(ControllerService $controllerService): Response {       
        return new Response(
            $controllerService->serialize(RegionCode::cases(), "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }

    public function getAllProducts(ControllerService $controllerService): Response {       
        return new Response(
            $controllerService->serialize(Product::cases(), "json"),
            Response::HTTP_OK,
            ['content-type' => 'text/json']
        );
    }
}
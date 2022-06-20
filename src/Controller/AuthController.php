<?php

namespace App\Controller;

use App\Service\ControllerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ODM\MongoDB\DocumentManager;

use App\Document\User;

class AuthController extends AbstractController
{
    /**
     *  @Route("/api/v1/register", methods={"POST"})
     *  @OA\RequestBody(required=true,@Model(type=User::class, groups={"default"}))
     */
    public function register(ControllerService $controllerService, DocumentManager $documentManager, Request $request): Response
    {
        $user = $controllerService->deserialize($request->getContent(), new User);

        $documentManager->persist($user);
        $documentManager->flush();
        $documentManager->clear();

        return $controllerService->baseResponse($user);
    }
}
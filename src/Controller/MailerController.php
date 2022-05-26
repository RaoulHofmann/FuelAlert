<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use OpenApi\Annotations as OA;

class MailerController extends AbstractController
{
    /**
     * @OA\Parameter(
     *     name="to",
     *     in="query",
     *     description="Target email address",
     *     @OA\Schema(type="string")
     * )
     * @OA\Parameter(
     *     name="subject",
     *     in="query",
     *     description="Email subject",
     *     @OA\Schema(type="string")
     * )
     */
    public function sendEmail(MailerInterface $mailer, Request $request): Response
    {
        $email = (new Email())
            ->from('fuelalert@668558.xyz')
            ->to($request->get("to"))
            ->subject($request->get("subject"))
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        return new Response("Sent", 200);
    }
}
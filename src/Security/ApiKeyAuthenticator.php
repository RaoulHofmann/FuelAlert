<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator;

class ApiKeyAuthenticator extends JWTAuthenticator
{
    protected function loadUser(array $payload, string $identity): UserInterface
    {
        print_r("ASDASDADS");
        print_r($payload);
        /** @var UserInterface|User $user */
        $user  = parent::loadUser($payload, $identity);
        if (true){
            $ex = new UserNotFoundException('No user found');
            $ex->setUserIdentifier($identity);
            throw $ex;
        }
        return $user;
    }
}
<?php

use PHPUnit\Framework\TestCase;

class UserAuthenticationTest extends TestCase
{
    public function testSuccessfulLogin()
    {
        $user = new User("usuario@example.com", "senha123");
        $authenticator = new Authenticator();
        $result = $authenticator->login("usuario@example.com", "senha123");
        $this->assertTrue($result);
    }

    public function testLoginWithIncorrectPassword()
    {
        $user = new User("usuario@example.com", "senha123");
        $authenticator = new Authenticator();
        $result = $authenticator->login("usuario@example.com", "senhaErrada");
        $this->assertFalse($result);
    }
}

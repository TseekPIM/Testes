<?php
namespace test;
use PHPUnit\Framework\TestCase;
use tseek\class\Candidato;

class UserRegistrationTest extends TestCase
{
    public function test_SuccessfulRegistration()
    {
        $cadastrar = new cadastrar();

        $formData = array(
            'nome' => 'João da Silva',
            'email' => 'joao@example.com',
            'senha' => 'senha123',
            'apelido' =>'zézinho',
        );

        $cadastrar = new cadastrar();
        $result = $cadastrar->register($formData);

        $this->assertTrue($result);
    }
    /*
        public function testRegistrationWithEmailAlreadyExists()
        {
            $existingEmail = 'joao@example.com';


            $formData = array(
                'Nome' => 'João da Silva',
                'Email' => 'joao@example.com',
                'Senha' => 'senha123'
            );

            $registrar = new Registrar();
            $result = $registrar->register($formData);

            $this->assertFalse($result);
        }
    */
}

<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 9:18 AM
 */

namespace Login\Domain;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Tests\Encoder\PasswordEncoder;

class Login
{

   private $email;
   private  $encodedPassword;

    public static function submit(Email $email, EncodedPassword $encodedPassword): self
    {
        return new self($email,  $encodedPassword);
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->encodedPassword;
    }

    private function __construct(Email $email, PasswordEncoder $passwordEncoder)
    {
        $this->email = $email;
        $this->encodedPassword = $passwordEncoder;
    }


}
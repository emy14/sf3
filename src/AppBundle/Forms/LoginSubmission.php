<?php
namespace AppBundle\Forms;

use Symfony\Component\Validator\Constraints as Assert;

class LoginSubmission
{
    /** @Assert\Email */
    /** @Assert\NotBlank */
    public $email;

    /** @Assert\NotBlank */
    public $password;
}

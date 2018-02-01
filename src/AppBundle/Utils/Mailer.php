<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 2/1/18
 * Time: 8:44 AM
 */

namespace AppBundle;


class Mailer
{

    public $email;


    public function __construct($email)
    {
        $this->email = $email;
    }

    public function sendEmail(){
        mail($this->email, 'Changement e-mail', "Code :" );
    }


}
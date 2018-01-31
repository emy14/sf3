<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 9:18 AM
 */

namespace Login\Domain;

 interface LoginRepository
{
    public function save(Login $login): void;

}
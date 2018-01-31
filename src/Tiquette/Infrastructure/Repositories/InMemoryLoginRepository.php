<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/29/18
 * Time: 9:23 AM
 */

class InMemoryLoginRepository implements LoginRepository
{
    private $logins = [];

    public function save(Login $login): void
    {
        $this->logins[] = $login;
    }
}

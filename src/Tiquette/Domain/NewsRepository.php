<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 4:18 AM
 */

namespace Tiquette\Domain;


interface NewsRepository
{
    public function save(Email $email): void;

}
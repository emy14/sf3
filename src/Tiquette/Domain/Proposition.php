<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 7:50 AM
 */

namespace Tiquette\Domain;


class Proposition
{
    private $price;

    /**
     * Proposition constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }



}
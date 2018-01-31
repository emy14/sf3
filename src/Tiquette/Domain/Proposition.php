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
    private $id_ticket;

    public static function submit(int $price, int $id_ticket): self
    {
        return new self($price, $id_ticket);
    }


    public function __construct(int $price, $id_ticket)
    {
        $this->price = $price;
        $this->id_ticket = $id_ticket;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function getIdTicket()
    {
        return $this->id_ticket;
    }






}
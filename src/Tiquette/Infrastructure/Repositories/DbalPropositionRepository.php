<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 8:20 AM
 */

namespace Tiquette\Infrastructure\Repositories;


use Tiquette\Domain\Proposition;
use Doctrine\DBAL\Connection;

class DbalPropositionRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function save(Proposition $proposition): void
    {


        $data = [
            'id_ticket' => $proposition->getIdTicket(),
            'price' => $proposition->getPrice(),
            'price_currency' => 'EUR',
        ];


        $this->connection->insert('proposition', $data);
    }
}
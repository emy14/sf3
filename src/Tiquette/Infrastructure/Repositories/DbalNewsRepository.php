<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 4:17 AM
 */

namespace Tiquette\Infrastructure\Repositories;

use Doctrine\DBAL\Connection;
use Tiquette\Domain\Email;


class DbalNewsRepository
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function save(Email $email): void
    {
        $data = [
            'email' => $email
        ];

        $this->connection->insert('news', $data);
    }
}
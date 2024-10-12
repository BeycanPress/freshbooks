<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class ClientList
{
    /**
     * @var array<Client>
     */
    private array $list = [];

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        foreach ($conn->get('users/clients') as $value) {
            $this->list[] = (new Client($conn))->fromObject($value);
        }
    }

    /**
     * @return array<Client>
     */
    public function getList(): array
    {

        return $this->list;
    }
}

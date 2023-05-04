<?php 

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class ClientList
{
    /**
     * @var array
     */
    private $list = [];

    /**
     * @var Connection
     */
    public function __construct(Connection $conn)
    {
        foreach ($conn->get('users/clients') as $value) {
            $this->list[] = (new Client($conn))->fromObject($value);
        }
    }

    /**
     * @return array
     */
    public function getList() : array
    {
        return $this->list;
    }
}
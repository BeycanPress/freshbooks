<?php 

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class PaymentList
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
        foreach ($conn->get('payments/payments') as $value) {
            $this->list[] = (new Payment($conn))->fromObject($value);
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
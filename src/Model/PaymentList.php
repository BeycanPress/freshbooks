<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class PaymentList
{
    /**
     * @var array<Payment>
     */
    private array $list = [];

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        foreach ($conn->get('payments/payments') as $value) {
            $this->list[] = (new Payment($conn))->fromObject($value);
        }
    }

    /**
     * @return array<Payment>
     */
    public function getList(): array
    {

        return $this->list;
    }
}

<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class InvoiceList
{
    /**
     * @var array<Invoice>
     */
    private array $list = [];

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        foreach ($conn->get('invoices/invoices')->invoices as $value) {
            $this->list[] = (new Invoice($conn))->fromObject((object) $value);
        }
    }

    /**
     * @return array<Invoice>
     */
    public function getList(): array
    {

        return $this->list;
    }
}

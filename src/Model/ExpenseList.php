<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class ExpenseList
{
    /**
     * @var array<Expense>
     */
    private array $list = [];

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        foreach ($conn->get('expenses/expenses')->expenses as $value) {
            $this->list[] = (new Expense($conn))->fromObject((object) $value);
        }
    }

    /**
     * @return array<Expense>
     */
    public function getList(): array
    {

        return $this->list;
    }
}

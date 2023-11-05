<?php 

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class ExpenseList
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
        foreach ($conn->get('expenses/expenses') as $value) {
            $this->list[] = (new Expense($conn))->fromObject($value);
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
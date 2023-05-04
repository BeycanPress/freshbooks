<?php 

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class InvoiceList
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
        foreach ($conn->get('invoices/invoices') as $value) {
            $this->list[] = (new Invoice($conn))->fromObject($value);
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
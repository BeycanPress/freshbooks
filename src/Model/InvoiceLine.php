<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

class InvoiceLine
{
    /**
     * @var int
     */
    private int $invoiceId = 0;

    /**
     * @var string
     */
    private string $name = '';

    /**
     * @var int
     */
    private int $quantity = 0;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var int|null
     */
    private ?int $expenseId = null;

    /**
     * @var string|null
     */
    private ?string $taxName1 = null;

    /**
     * @var float|null
     */
    private ?float $taxAmount1 = null;

    /**
     * @var string|null
     */
    private ?string $taxName2 = null;

    /**
     * @var float|null
     */
    private ?float $taxAmount2 = null;

    /**
     * @var object|null
     */
    private ?object $unitCost = null;

    /**
     * @var object|null
     */
    private ?object $amount = null;


    /**
     * @param int $invoiceId
     * @return InvoiceLine
     */
    public function setInvoiceId(int $invoiceId): InvoiceLine
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @param string $name
     * @return InvoiceLine
     */
    public function setName(string $name): InvoiceLine
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $quantity
     * @return InvoiceLine
     */
    public function setQuantity(int $quantity): InvoiceLine
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string|null $type
     * @return InvoiceLine
     */
    public function setType(?string $type): InvoiceLine
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string|null $description
     * @return InvoiceLine
     */
    public function setDescription(?string $description): InvoiceLine
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int|null $expenseId
     * @return InvoiceLine
     */
    public function setExpenseId(?int $expenseId): InvoiceLine
    {
        $this->expenseId = $expenseId;
        return $this;
    }


    /**
     * @param string|null $taxName1
     * @return InvoiceLine
     */
    public function setTaxName1(?string $taxName1): InvoiceLine
    {
        $this->taxName1 = $taxName1;
        return $this;
    }

    /**
     * @param float|null $taxAmount1
     * @return InvoiceLine
     */
    public function setTaxAmount1(?float $taxAmount1): InvoiceLine
    {
        $this->taxAmount1 = $taxAmount1;
        return $this;
    }

    /**
     * @param string|null $taxName2
     * @return InvoiceLine
     */
    public function setTaxName2(?string $taxName2): InvoiceLine
    {
        $this->taxName2 = $taxName2;
        return $this;
    }

    /**
     * @param float|null $taxAmount2
     * @return InvoiceLine
     */
    public function setTaxAmount2(?float $taxAmount2): InvoiceLine
    {
        $this->taxAmount2 = $taxAmount2;
        return $this;
    }

    /**
     * @param object $unitCost
     * @return InvoiceLine
     */
    private function setUnitCost(object $unitCost): InvoiceLine
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * @param object $amount
     * @return InvoiceLine
     */
    public function setAmount(object $amount): InvoiceLine
    {
        $amount->amount = (string) $amount->amount;
        $this->setUnitCost($amount); // amount and unitCost are the same (for now)
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null
     */
    public function getExpenseId(): ?int
    {
        return $this->expenseId;
    }

    /**
     * @return string|null
     */
    public function getTaxName1(): ?string
    {
        return $this->taxName1;
    }

    /**
     * @return float|null
     */
    public function getTaxAmount1(): ?float
    {
        return $this->taxAmount1;
    }

    /**
     * @return string|null
     */
    public function getTaxName2(): ?string
    {
        return $this->taxName2;
    }

    /**
     * @return float|null
     */
    public function getTaxAmount2(): ?float
    {
        return $this->taxAmount2;
    }

    /**
     * @return object|null
     */
    public function getUnitCost(): ?object
    {
        return $this->unitCost;
    }

    /**
     * @return object|null
     */
    public function getAmount(): ?object
    {
        return $this->amount;
    }

    /**
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return array_filter([
            'invoiceid' => $this->invoiceId,
            'name' => $this->name,
            'qty' => $this->quantity,
            'type' => $this->type,
            'description' => $this->description,
            'expenseid' => $this->expenseId,
            'taxName1' => $this->taxName1,
            'taxAmount1' => $this->taxAmount1,
            'taxName2' => $this->taxName2,
            'taxAmount2' => $this->taxAmount2,
            'unit_cost' => $this->unitCost,
            'amount' => $this->amount
        ]);
    }


    /**
     * @param array<string,mixed> $data
     * @return InvoiceLine
     */
    public function fromArray(array $data): InvoiceLine
    {
        return $this->setInvoiceId($data['invoiceid'])
            ->setName($data['name'])
            ->setQuantity($data['qty'])
            ->setType($data['type'])
            ->setDescription($data['description'])
            ->setExpenseId($data['expenseid'])
            ->setTaxName1($data['taxName1'])
            ->setTaxAmount1($data['taxAmount1'])
            ->setTaxName2($data['taxName2'])
            ->setTaxAmount2($data['taxAmount2'])
            ->setAmount($data['amount']);
    }
}

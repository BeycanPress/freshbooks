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
     * @var int
     */
    private int $lineId = 1;

    /**
     * @var int
     */
    private int $baseCampId = 0;

    /**
     * @var int|null
     */
    private ?int $taskNo = null;

    /**
     * @var string
     */
    private string $name = '';

    /**
     * @var mixed
     */
    private mixed $compoundedTax = false;

    /**
     * @var mixed
     */
    private mixed $date = null;

    /**
     * @var object|null
     */
    private ?object $discount = null;

    /**
     * @var mixed
     */
    private mixed $domain = null;

    /**
     * @var mixed
     */
    private mixed $modernProjectId = null;

    /**
     * @var array<mixed>
     */
    private mixed $modernTimeEntries = [];

    /**
     * @var mixed
     */
    private mixed $productCode = null;

    /**
     * @var mixed
     */
    private mixed $retainerId = null;

    /**
     * @var mixed
     */
    private mixed $retainerPeriodId = null;

    /**
     * @var string|null
     */
    private mixed $taxRuleCode = null;

    /**
     * @var int
     */
    private int $quantity = 0;

    /**
     * @var string|int|null
     */
    private string|int|null $type = null;

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
     * @var string|null
     */
    private ?string $unitCode = null;

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
     * @param int $lineId
     * @return InvoiceLine
     */
    public function setLineId(int $lineId): InvoiceLine
    {
        $this->lineId = $lineId;
        return $this;
    }

    /**
     * @param int $baseCampId
     * @return InvoiceLine
     */
    public function setBaseCampId(int $baseCampId): InvoiceLine
    {
        $this->baseCampId = $baseCampId;
        return $this;
    }

    /**
     * @param int|null $taskNo
     * @return InvoiceLine
     */
    public function setTaskNo(?int $taskNo): InvoiceLine
    {
        $this->taskNo = $taskNo;
        return $this;
    }

    /**
     * @param mixed $compoundedTax
     * @return InvoiceLine
     */
    public function setCompoundedTax(mixed $compoundedTax): InvoiceLine
    {
        $this->compoundedTax = $compoundedTax;
        return $this;
    }

    /**
     * @param mixed $date
     * @return InvoiceLine
     */
    public function setDate(mixed $date): InvoiceLine
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param object|null $discount
     * @return InvoiceLine
     */
    public function setDiscount(?object $discount): InvoiceLine
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param mixed $domain
     * @return InvoiceLine
     */
    public function setDomain(mixed $domain): InvoiceLine
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @param mixed $modernProjectId
     * @return InvoiceLine
     */
    public function setModernProjectId(mixed $modernProjectId): InvoiceLine
    {
        $this->modernProjectId = $modernProjectId;
        return $this;
    }

    /**
     * @param array<mixed> $modernTimeEntries
     * @return InvoiceLine
     */
    public function setModernTimeEntries(array $modernTimeEntries): InvoiceLine
    {
        $this->modernTimeEntries = $modernTimeEntries;
        return $this;
    }

    /**
     * @param mixed $productCode
     * @return InvoiceLine
     */
    public function setProductCode(mixed $productCode): InvoiceLine
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @param mixed $retainerId
     * @return InvoiceLine
     */
    public function setRetainerId(mixed $retainerId): InvoiceLine
    {
        $this->retainerId = $retainerId;
        return $this;
    }

    /**
     * @param mixed $retainerPeriodId
     * @return InvoiceLine
     */
    public function setRetainerPeriodId(mixed $retainerPeriodId): InvoiceLine
    {
        $this->retainerPeriodId = $retainerPeriodId;
        return $this;
    }

    /**
     * @param string|null $taxRuleCode
     * @return InvoiceLine
     */
    public function setTaxRuleCode(?string $taxRuleCode): InvoiceLine
    {
        $this->taxRuleCode = $taxRuleCode;
        return $this;
    }

    /**
     * @param string|null $unitCode
     * @return InvoiceLine
     */
    public function setUnitCode(?string $unitCode): InvoiceLine
    {
        $this->unitCode = $unitCode;
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
     * @param string|int|null $type
     * @return InvoiceLine
     */
    public function setType(string|int|null $type): InvoiceLine
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
     * @return int
     */
    public function getLineId(): int
    {
        return $this->lineId;
    }

    /**
     * @return int
     */
    public function getBaseCampId(): int
    {
        return $this->baseCampId;
    }

    /**
     * @return int|null
     */
    public function getTaskNo(): ?int
    {
        return $this->taskNo;
    }

    /**
     * @return mixed
     */
    public function getCompoundedTax(): mixed
    {
        return $this->compoundedTax;
    }

    /**
     * @return mixed
     */
    public function getDate(): mixed
    {
        return $this->date;
    }

    /**
     * @return object|null
     */
    public function getDiscount(): ?object
    {
        return $this->discount;
    }

    /**
     * @return mixed
     */
    public function getDomain(): mixed
    {
        return $this->domain;
    }

    /**
     * @return mixed
     */
    public function getModernProjectId(): mixed
    {
        return $this->modernProjectId;
    }

    /**
     * @return array<mixed>
     */
    public function getModernTimeEntries(): array
    {
        return $this->modernTimeEntries;
    }

    /**
     * @return mixed
     */
    public function getProductCode(): mixed
    {
        return $this->productCode;
    }

    /**
     * @return mixed
     */
    public function getRetainerId(): mixed
    {
        return $this->retainerId;
    }

    /**
     * @return mixed
     */
    public function getRetainerPeriodId(): mixed
    {
        return $this->retainerPeriodId;
    }

    /**
     * @return string|null
     */
    public function getTaxRuleCode(): ?string
    {
        return $this->taxRuleCode;
    }

    /**
     * @return string|null
     */
    public function getUnitCode(): ?string
    {
        return $this->unitCode;
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
     * @return string|int|null
     */
    public function getType(): string|int|null
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
        return [
            'invoiceid' => $this->invoiceId,
            'lineid' => $this->lineId,
            'taskno' => $this->taskNo,
            'basecampid' => $this->baseCampId,
            'compounded_tax' => $this->compoundedTax,
            'date' => $this->date,
            'discount' => $this->discount,
            'domain' => $this->domain,
            'modern_project_id' => $this->modernProjectId,
            'modern_time_entries' => $this->modernTimeEntries,
            'product_code' => $this->productCode,
            'retainer_id' => $this->retainerId,
            'retainer_period_id' => $this->retainerPeriodId,
            'tax_rule_code' => $this->taxRuleCode,
            'unit_code' => $this->unitCode,
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
        ];
    }


    /**
     * @param array<string,mixed> $data
     * @return InvoiceLine
     */
    public function fromArray(array $data): InvoiceLine
    {
        return $this->setInvoiceId($data['invoiceid'])
            ->setLineId($data['lineid'])
            ->setTaskNo($data['taskno'] ?? null)
            ->setBaseCampId($data['basecampid'])
            ->setCompoundedTax($data['compounded_tax'] ?? false)
            ->setDate($data['date'] ?? null)
            ->setDiscount($data['discount'] ?? null)
            ->setDomain($data['domain'] ?? null)
            ->setModernProjectId($data['modern_project_id'] ?? null)
            ->setModernTimeEntries($data['modern_time_entries'] ?? [])
            ->setProductCode($data['product_code'] ?? null)
            ->setRetainerId($data['retainer_id'] ?? null)
            ->setRetainerPeriodId($data['retainer_period_id'] ?? null)
            ->setTaxRuleCode($data['tax_rule_code'] ?? null)
            ->setUnitCode($data['unit_code'] ?? null)
            ->setName($data['name'])
            ->setQuantity((int) $data['qty'])
            ->setType($data['type'] ?? null)
            ->setDescription($data['description'])
            ->setExpenseId($data['expenseid'])
            ->setTaxName1($data['taxName1'] ?? null)
            ->setTaxAmount1((float) $data['taxAmount1'] ?? null)
            ->setTaxName2($data['taxName2'] ?? null)
            ->setTaxAmount2((float) $data['taxAmount2'] ?? null)
            ->setAmount($data['amount']);
    }

    /**
     * @param object $data
     * @return InvoiceLine
     */
    public function fromObject(object $data): InvoiceLine
    {
        return $this->fromArray((array) $data);
    }
}

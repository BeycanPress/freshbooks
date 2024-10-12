<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class Expense
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var int
     */
    private int $expenseId;

    /**
     * @var int
     */
    private int $categoryId;

    /**
     * @var int
     */
    private int $projectId;

    /**
     * @var int
     */
    private int $invoiceId;

    /**
     * @var int
     */
    private int $clientId;

    /**
     * @var int
     */
    private int $profileId;

    /**
     * @var string
     */
    private string $transactionId;

    /**
     * @var string
     */
    private string $markupPercent;

    /**
     * @var string
     */
    private string $taxName1;

    /**
     * @var object
     */
    private object $taxAmount1;

    /**
     * @var string
     */
    private string $taxPercent1;

    /**
     * @var string
     */
    private string $taxName2;

    /**
     * @var object
     */
    private object $taxAmount2;

    /**
     * @var string
     */
    private string $taxPercent2;

    /**
     * @var bool
     */
    private bool $isDuplicate;

    /**
     * @var string
     */
    private string $accountName;

    /**
     * @var int
     */
    private int $visState;

    /**
     * @var int
     */
    private int $status;

    /**
     * @var string
     */
    private string $bankName;

    /**
     * @var string
     */
    private string $updated;

    /**
     * @var string
     */
    private string $vendor;

    /**
     * @var int
     */
    private int $extSystemId;

    /**
     * @var int
     */
    private int $staffId;

    /**
     * @var string
     */
    private string $date;

    /**
     * @var bool
     */
    private bool $hasReceipt;

    /**
     * @var string
     */
    private string $accountingSystemId;

    /**
     * @var int
     */
    private int $backgroundJobId;

    /**
     * @var string
     */
    private string $notes;

    /**
     * @var int
     */
    private int $extInvoiceId;

    /**
     * @var object
     */
    private object $amount;

    /**
     * @var bool
     */
    private bool $compoundedTax;

    /**
     * @var int
     */
    private int $accountId;

    /**
     * @var Connection
     */
    private Connection $conn;

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     * @param integer $id
     * @return Expense
     */
    public function setId(int $id): Expense
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param integer $expenseId
     * @return Expense
     */
    public function setExpenseId(int $expenseId): Expense
    {
        $this->expenseId = $expenseId;
        return $this;
    }

    /**
     * @param integer $categoryId
     * @return Expense
     */
    public function setCategoryId(int $categoryId): Expense
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @param integer $projectId
     * @return Expense
     */
    public function setProjectId(int $projectId): Expense
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @param integer|null $invoiceId
     * @return Expense
     */
    public function setInvoiceId(?int $invoiceId): Expense
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @param integer $clientId
     * @return Expense
     */
    public function setClientId(int $clientId): Expense
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @param integer|null $profileId
     * @return Expense
     */
    public function setProfileId(?int $profileId): Expense
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * @param string|null $transactionId
     * @return Expense
     */
    public function setTransactionId(?string $transactionId): Expense
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @param string $markupPercent
     * @return Expense
     */
    public function setMarkupPercent(string $markupPercent): Expense
    {
        $this->markupPercent = $markupPercent;
        return $this;
    }

    /**
     * @param string|null $taxName1
     * @return Expense
     */
    public function setTaxName1(?string $taxName1): Expense
    {
        $this->taxName1 = $taxName1;
        return $this;
    }

    /**
     * @param object|null $taxAmount1
     * @return Expense
     */
    public function setTaxAmount1(?object $taxAmount1): Expense
    {
        $this->taxAmount1 = $taxAmount1;
        return $this;
    }

    /**
     * @param string|null $taxPercent1
     * @return Expense
     */
    public function setTaxPercent1(?string $taxPercent1): Expense
    {
        $this->taxPercent1 = $taxPercent1;
        return $this;
    }

    /**
     * @param string|null $taxName2
     * @return Expense
     */
    public function setTaxName2(?string $taxName2): Expense
    {
        $this->taxName2 = $taxName2;
        return $this;
    }

    /**
     * @param object|null $taxAmount2
     * @return Expense
     */
    public function setTaxAmount2(?object $taxAmount2): Expense
    {
        $this->taxAmount2 = $taxAmount2;
        return $this;
    }

    /**
     * @param string|null $taxPercent2
     * @return Expense
     */
    public function setTaxPercent2(?string $taxPercent2): Expense
    {
        $this->taxPercent2 = $taxPercent2;
        return $this;
    }

    /**
     * @param string $accountName
     * @return Expense
     */
    public function setAccountName(string $accountName): Expense
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @param boolean $isDuplicate
     * @return Expense
     */
    public function setIsDuplicate(bool $isDuplicate): Expense
    {
        $this->isDuplicate = $isDuplicate;
        return $this;
    }

    /**
     * @param integer $visState
     * @return Expense
     */
    public function setVisState(int $visState): Expense
    {
        $this->visState = $visState;
        return $this;
    }

    /**
     * @param integer $status
     * @return Expense
     */
    public function setStatus(int $status): Expense
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $bankName
     * @return Expense
     */
    public function setBankName(string $bankName): Expense
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @param string $updated
     * @return Expense
     */
    public function setUpdated(string $updated): Expense
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @param string $vendor
     * @return Expense
     */
    public function setVendor(string $vendor): Expense
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @param integer $extSystemId
     * @return Expense
     */
    public function setExtSystemId(int $extSystemId): Expense
    {
        $this->extSystemId = $extSystemId;
        return $this;
    }

    /**
     * @param integer $staffId
     * @return Expense
     */
    public function setStaffId(int $staffId): Expense
    {
        $this->staffId = $staffId;
        return $this;
    }

    /**
     * @param string $date
     * @return Expense
     */
    public function setDate(string $date): Expense
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param boolean $hasReceipt
     * @return Expense
     */
    public function setHasReceipt(bool $hasReceipt): Expense
    {
        $this->hasReceipt = $hasReceipt;
        return $this;
    }

    /**
     * @param string $accountingSystemId
     * @return Expense
     */
    public function setAccountingSystemId(string $accountingSystemId): Expense
    {
        $this->accountingSystemId = $accountingSystemId;
        return $this;
    }

    /**
     * @param integer $backgroundJobId
     * @return Expense
     */
    public function setBackgroundJobId(?int $backgroundJobId): Expense
    {
        $this->backgroundJobId = $backgroundJobId;
        return $this;
    }

    /**
     * @param string $notes
     * @return Expense
     */
    public function setNotes(string $notes): Expense
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param integer $extInvoiceId
     * @return Expense
     */
    public function setExtInvoiceId(int $extInvoiceId): Expense
    {
        $this->extInvoiceId = $extInvoiceId;
        return $this;
    }

    /**
     * @param object $amount
     * @return Expense
     */
    public function setAmount(object $amount): Expense
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param boolean $compoundedTax
     * @return Expense
     */
    public function setCompoundedTax(bool $compoundedTax): Expense
    {
        $this->compoundedTax = $compoundedTax;
        return $this;
    }

    /**
     * @param integer $accountId
     * @return Expense
     */
    public function setAccountId(?int $accountId): Expense
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getExpenseId(): int
    {
        return $this->expenseId;
    }

    /**
     * @return integer
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return integer
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @return integer
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }

    /**
     * @return integer
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @return integer
     */
    public function getProfileId(): int
    {
        return $this->profileId;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getMarkupPercent(): string
    {
        return $this->markupPercent;
    }

    /**
     * @return string
     */
    public function getTaxName1(): string
    {
        return $this->taxName1;
    }

    /**
     * @return object
     */
    public function getTaxAmount1(): object
    {
        return $this->taxAmount1;
    }

    /**
     * @return string
     */
    public function getTaxPercent1(): string
    {
        return $this->taxPercent1;
    }

    /**
     * @return string
     */
    public function getTaxName2(): string
    {
        return $this->taxName2;
    }

    /**
     * @return object
     */
    public function getTaxAmount2(): object
    {
        return $this->taxAmount2;
    }

    /**
     * @return string
     */
    public function getTaxPercent2(): string
    {
        return $this->taxPercent2;
    }

    /**
     * @return string
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * @return boolean
     */
    public function getIsDuplicate(): bool
    {
        return $this->isDuplicate;
    }

    /**
     * @return integer
     */
    public function getVisState(): int
    {
        return $this->visState;
    }

    /**
     * @return integer
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @return string
     */
    public function getUpdated(): string
    {
        return $this->updated;
    }

    /**
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }

    /**
     * @return integer
     */
    public function getExtSystemId(): int
    {
        return $this->extSystemId;
    }

    /**
     * @return integer
     */
    public function getStaffId(): int
    {
        return $this->staffId;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return boolean
     */
    public function getHasReceipt(): bool
    {
        return $this->hasReceipt;
    }

    /**
     * @return string
     */
    public function getAccountingSystemId(): string
    {
        return $this->accountingSystemId;
    }

    /**
     * @return integer
     */
    public function getBackgroundJobId(): int
    {
        return $this->backgroundJobId;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @return integer
     */
    public function getExtInvoiceId(): int
    {
        return $this->extInvoiceId;
    }

    /**
     * @return object
     */
    public function getAmount(): object
    {
        return $this->amount;
    }

    /**
     * @return boolean
     */
    public function getCompoundedTax(): bool
    {
        return $this->compoundedTax;
    }

    /**
     * @return integer
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @return array<mixed>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'expenseid' => $this->expenseId,
            'categoryid' => $this->categoryId,
            'projectid' => $this->projectId,
            'invoiceid' => $this->invoiceId,
            'clientid' => $this->clientId,
            'profileid' => $this->profileId,
            'transactionid' => $this->transactionId,
            'markup_percent' => $this->markupPercent,
            'taxName1' => $this->taxName1,
            'taxAmount1' => $this->taxAmount1,
            'taxPercent1' => $this->taxPercent1,
            'taxName2' => $this->taxName2,
            'taxAmount2' => $this->taxAmount2,
            'taxPercent2' => $this->taxPercent2,
            'isduplicate' => $this->isDuplicate,
            'account_name' => $this->accountName,
            'vis_state' => $this->visState,
            'status' => $this->status,
            'bank_name' => $this->bankName,
            'updated' => $this->updated,
            'vendor' => $this->vendor,
            'ext_systemid' => $this->extSystemId,
            'staffid' => $this->staffId,
            'date' => $this->date,
            'has_receipt' => $this->hasReceipt,
            'accounting_systemid' => $this->accountingSystemId,
            'background_jobid' => $this->backgroundJobId,
            'notes' => $this->notes,
            'ext_invoiceid' => $this->extInvoiceId,
            'amount' => $this->amount,
            'compounded_tax' => $this->compoundedTax,
            'accountid' => $this->accountId,
        ];
    }

    /**
     * @param object $data
     * @return Expense
     */
    public function fromObject(object $data): Expense
    {
        return $this->setId($data->id)
            ->setExpenseId($data->expenseid)
            ->setCategoryId($data->categoryid)
            ->setProjectId($data->projectid)
            ->setInvoiceId($data->invoiceid)
            ->setClientId($data->clientid)
            ->setProfileId($data->profileid)
            ->setTransactionId($data->transactionid)
            ->setMarkupPercent($data->markup_percent)
            ->setTaxName1($data->taxName1)
            ->setTaxAmount1($data->taxAmount1)
            ->setTaxPercent1($data->taxPercent1)
            ->setTaxName2($data->taxName2)
            ->setTaxAmount2($data->taxAmount2)
            ->setTaxPercent2($data->taxPercent2)
            ->setIsDuplicate($data->isduplicate)
            ->setAccountName($data->account_name)
            ->setVisState($data->vis_state)
            ->setStatus($data->status)
            ->setBankName($data->bank_name)
            ->setUpdated($data->updated)
            ->setVendor($data->vendor)
            ->setExtSystemId($data->ext_systemid)
            ->setStaffId($data->staffid)
            ->setDate($data->date)
            ->setHasReceipt($data->has_receipt)
            ->setAccountingSystemId($data->accounting_systemid)
            ->setBackgroundJobId($data->background_jobid)
            ->setNotes($data->notes)
            ->setExtInvoiceId($data->ext_invoiceid)
            ->setAmount($data->amount)
            ->setCompoundedTax($data->compounded_tax)
            ->setAccountId($data->accountid);
    }

    /**
     * @param string $id
     * @return Expense
     */
    public function getById(string $id): Expense
    {
        return $this->fromObject($this->conn->get('expenses/expenses/' . $id)->expense);
    }


    /**
     * @return Expense
     */
    public function create(): Expense
    {
        return $this->fromObject($this->conn->post('expenses/expenses', [
            "expense" => array_filter($this->toArray(), function ($key) {
                return !in_array($key, ['updated', 'accounting_systemid']);
            }, ARRAY_FILTER_USE_KEY)
        ], true)->expense);
    }


    /**
     * @param int|null $id
     * @return Expense
     */
    public function update(?int $id = null): Expense
    {
        return $this->fromObject($this->conn->put('expenses/expenses/' . strval($id ?? $this->getId()), [
            "expense" => array_filter(array_filter($this->toArray(), function ($key) {
                return !in_array($key, ['updated', 'accounting_systemid']);
            }, ARRAY_FILTER_USE_KEY))
        ], true)->expense);
    }

    /**
     * @param int|null $id
     * @return Expense
     */
    public function delete(?int $id = null): Expense
    {
        return $this->fromObject($this->conn->put('expenses/expenses/' . strval($id  ?? $this->getId()), [
            "expense" => [
                "vis_state" => 1
            ]
        ], true)->expense);
    }
}

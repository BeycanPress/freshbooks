<?php

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class Expense
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $expenseId;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var int
     */
    private $invoiceId;

    /**
     * @var int
     */
    private $clientId;

    /**
     * @var int
     */
    private $profileId;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $markupPercent;

    /**
     * @var string
     */
    private $taxName1;

    /**
     * @var object
     */
    private $taxAmount1;

    /**
     * @var string
     */
    private $taxPercent1;

    /**
     * @var string
     */
    private $taxName2;

    /**
     * @var object
     */
    private $taxAmount2;

    /**
     * @var string
     */
    private $taxPercent2;

    /**
     * @var bool
     */
    private $isDuplicate;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var int
     */
    private $visState;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $updated;

    /**
     * @var string
     */
    private $vendor;

    /**
     * @var int
     */
    private $extSystemId;

    /**
     * @var int
     */
    private $staffId;

    /**
     * @var string
     */
    private $date;

    /**
     * @var bool
     */
    private $hasReceipt;

    /**
     * @var string
     */
    private $accountingSystemId;

    /**
     * @var int
     */
    private $backgroundJobId;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var int
     */
    private $extInvoiceId;

    /**
     * @var object
     */
    private $amount;

    /**
     * @var bool
     */
    private $compoundedTax;

    /**
     * @var int
     */
    private $accountId;

    /**
     * @var Connection
     */
    private $conn;

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    public function setId(int $id) : Expense
    {
        $this->id = $id;
        return $this;
    }

    public function setExpenseId(int $expenseId) : Expense
    {
        $this->expenseId = $expenseId;
        return $this;
    }

    public function setCategoryId(int $categoryId) : Expense
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function setProjectId(int $projectId) : Expense
    {
        $this->projectId = $projectId;
        return $this;
    }

    public function setInvoiceId(?int $invoiceId) : Expense
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    public function setClientId(int $clientId) : Expense
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function setProfileId(?int $profileId) : Expense
    {
        $this->profileId = $profileId;
        return $this;
    }

    public function setTransactionId(?string $transactionId) : Expense
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function setMarkupPercent(string $markupPercent) : Expense
    {
        $this->markupPercent = $markupPercent;
        return $this;
    }

    public function setTaxName1(?string $taxName1) : Expense
    {
        $this->taxName1 = $taxName1;
        return $this;
    }

    public function setTaxAmount1(?object $taxAmount1) : Expense
    {
        $this->taxAmount1 = $taxAmount1;
        return $this;
    }

    public function setTaxPercent1(?string $taxPercent1) : Expense
    {
        $this->taxPercent1 = $taxPercent1;
        return $this;
    }

    public function setTaxName2(?string $taxName2) : Expense
    {
        $this->taxName2 = $taxName2;
        return $this;
    }

    public function setTaxAmount2(?object $taxAmount2) : Expense
    {
        $this->taxAmount2 = $taxAmount2;
        return $this;
    }

    public function setTaxPercent2(?string $taxPercent2) : Expense
    {
        $this->taxPercent2 = $taxPercent2;
        return $this;
    }

    public function setAccountName(string $accountName) : Expense
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function setIsDuplicate(bool $isDuplicate) : Expense
    {
        $this->isDuplicate = $isDuplicate;
        return $this;
    }

    public function setVisState(int $visState) : Expense
    {
        $this->visState = $visState;
        return $this;
    }

    public function setStatus(int $status) : Expense
    {
        $this->status = $status;
        return $this;
    }

    public function setBankName(string $bankName) : Expense
    {
        $this->bankName = $bankName;
        return $this;
    }

    public function setUpdated(string $updated) : Expense
    {
        $this->updated = $updated;
        return $this;
    }

    public function setVendor(string $vendor) : Expense
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function setExtSystemId(int $extSystemId) : Expense
    {
        $this->extSystemId = $extSystemId;
        return $this;
    }

    public function setStaffId(int $staffId) : Expense
    {
        $this->staffId = $staffId;
        return $this;
    }

    public function setDate(string $date) : Expense
    {
        $this->date = $date;
        return $this;
    }

    public function setHasReceipt(bool $hasReceipt) : Expense
    {
        $this->hasReceipt = $hasReceipt;
        return $this;
    }

    public function setAccountingSystemId(string $accountingSystemId) : Expense
    {
        $this->accountingSystemId = $accountingSystemId;
        return $this;
    }

    public function setBackgroundJobId(?int $backgroundJobId) : Expense
    {
        $this->backgroundJobId = $backgroundJobId;
        return $this;
    }

    public function setNotes(string $notes) : Expense
    {
        $this->notes = $notes;
        return $this;
    }

    public function setExtInvoiceId(int $extInvoiceId) : Expense
    {
        $this->extInvoiceId = $extInvoiceId;
        return $this;
    }

    public function setAmount(object $amount) : Expense
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCompoundedTax(bool $compoundedTax) : Expense
    {
        $this->compoundedTax = $compoundedTax;
        return $this;
    }

    public function setAccountId(?int $accountId) : Expense
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getExpenseId() : int
    {
        return $this->expenseId;
    }

    public function getCategoryId() : int
    {
        return $this->categoryId;
    }

    public function getProjectId() : int
    {
        return $this->projectId;
    }

    public function getInvoiceId() : int
    {
        return $this->invoiceId;
    }

    public function getClientId() : int
    {
        return $this->clientId;
    }

    public function getProfileId() : int
    {
        return $this->profileId;
    }

    public function getTransactionId() : string
    {
        return $this->transactionId;
    }

    public function getMarkupPercent() : string
    {
        return $this->markupPercent;
    }

    public function getTaxName1() : string
    {
        return $this->taxName1;
    }

    public function getTaxAmount1() : object
    {
        return $this->taxAmount1;
    }

    public function getTaxPercent1() : string
    {
        return $this->taxPercent1;
    }

    public function getTaxName2() : string
    {
        return $this->taxName2;
    }

    public function getTaxAmount2() : object
    {
        return $this->taxAmount2;
    }

    public function getTaxPercent2() : string
    {
        return $this->taxPercent2;
    }

    public function getAccountName() : string
    {
        return $this->accountName;
    }

    public function getIsDuplicate() : bool
    {
        return $this->isDuplicate;
    }

    public function getVisState() : int
    {
        return $this->visState;
    }

    public function getStatus() : int
    {
        return $this->status;
    }

    public function getBankName() : string
    {
        return $this->bankName;
    }

    public function getUpdated() : string
    {
        return $this->updated;
    }

    public function getVendor() : string
    {
        return $this->vendor;
    }

    public function getExtSystemId() : int
    {
        return $this->extSystemId;
    }

    public function getStaffId() : int
    {
        return $this->staffId;
    }

    public function getDate() : string
    {
        return $this->date;
    }

    public function getHasReceipt() : bool
    {
        return $this->hasReceipt;
    }

    public function getAccountingSystemId() : string
    {
        return $this->accountingSystemId;
    }

    public function getBackgroundJobId() : int
    {
        return $this->backgroundJobId;
    }

    public function getNotes() : string
    {
        return $this->notes;
    }

    public function getExtInvoiceId() : int
    {
        return $this->extInvoiceId;
    }

    public function getAmount() : object
    {
        return $this->amount;
    }

    public function getCompoundedTax() : bool
    {
        return $this->compoundedTax;
    }

    public function getAccountId() : int
    {
        return $this->accountId;
    }

    public function toArray() : array
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

    public function fromObject(object $data) : Expense
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
    public function getById(string $id) : Expense
    {
        return $this->fromObject($this->conn->get('expenses/expenses/' . $id)->expense);
    }


    /**
     * @return Expense
     */
    public function create() : Expense
    {
        return $this->fromObject($this->conn->post('expenses/expenses', [
            "expense" => array_filter($this->toArray(), function($key) {
                return !in_array($key, ['updated', 'accounting_systemid']);
            }, ARRAY_FILTER_USE_KEY)
        ], true)->expense);
    }
    

    /**
     * @param int|null $id
     * @return Expense
     */
    public function update(?int $id = null) : Expense
    {
        return $this->fromObject($this->conn->put('expenses/expenses/' . strval($id ?? $this->getId()), [
            "expense" => array_filter(array_filter($this->toArray(), function($key) {
                return !in_array($key, ['updated', 'accounting_systemid']);
            }, ARRAY_FILTER_USE_KEY))
        ], true)->expense);
    }

    /**
     * @param int|null $id
     * @return Expense
     */
    public function delete(?int $id = null) : Expense
    {
        return $this->fromObject($this->conn->put('expenses/expenses/' . strval($id  ?? $this->getId()), [
            "expense" => [
                "vis_state" => 1
            ]
        ], true)->expense);
    }
}
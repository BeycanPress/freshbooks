<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Helpers;
use BeycanPress\FreshBooks\Connection;

class Invoice
{
    use Helpers;

    /**
     * @var int
     */
    private int $id = 0;

    /**
     * @var string
     */
    private string $invoiceNumber = '';

    /**
     * @var int
     */
    private int $customerId = 0;

    /**
     * @var string
     */
    private string $firstName = '';

    /**
     * @var string
     */
    private string $lastName = '';

    /**
     * @var string
     */
    private string $address = '';

    /**
     * @var string
     */
    private string $street = '';

    /**
     * @var string|null
     */
    private ?string $street2 = null;

    /**
     * @var string
     */
    private string $city = '';

    /**
     * @var string
     */
    private string $province = '';

    /**
     * @var string
     */
    private string $postalCode = '';

    /**
     * @var string
     */
    private string $country = '';

    /**
     * @var object|null
     */
    private ?object $amount = null;

    /**
     * @var string
     */
    private string $currencyCode = '';

    /**
     * @var string
     */
    private string $organization = '';

    /**
     * @var string
     */
    private string $currentOrganization = '';

    /**
     * @var string
     */
    private string $notes = '';

    /**
     * @var string
     */
    private string $status = '';

    /**
     * @var array<string,int>
     */
    private array $statuses = [
        'disputed' => 0,
        'draft' => 1,
        'sent' => 2,
        'viewed' => 3,
        'paid' => 4,
        'auto paid' => 5,
        'retry' => 6,
        'failed' => 7,
        'partial' => 8,
    ];

    /**
     * @var int
     */
    private int $ownerId = 0;

    /**
     * @var string|null
     */
    private ?string $depositPercentage = null;

    /**
     * @var string
     */
    private string $createDate = '';

    /**
     * @var object|null
     */
    private ?object $outstanding = null;

    /**
     * @var string
     */
    private string $paymentStatus = '';

    /**
     * @var string|null
     */
    private ?string $vatName = '';

    /**
     * @var string
     */
    private string $vatNumber = '';

    /**
     * @var bool
     */
    private bool $gmail = false;

    /**
     * @var string
     */
    private string $v3Status = '';

    /**
     * @var int
     */
    private int $parent = 0;

    /**
     * @var string|null
     */
    private ?string $disputeStatus = null;

    /**
     * @var string
     */
    private string $depositStatus = '';

    /**
     * @var int
     */
    private int $estimateId = 0;

    /**
     * @var int
     */
    private int $extArchive = 0;

    /**
     * @var string
     */
    private string $template = '';

    /**
     * @var int
     */
    private int $basecampId = 0;

    /**
     * @var string|null
     */
    private ?string $generationDate = null;

    /**
     * @var bool
     */
    private bool $showAttachments = false;

    /**
     * @var int
     */
    private int $visState = 0;

    /**
     * @var string
     */
    private string $dueDate = '';

    /**
     * @var string
     */
    private string $updated = '';

    /**
     * @var string|null
     */
    private ?string $terms = null;

    /**
     * @var string
     */
    private string $description = '';

    /**
     * @var string|null
     */
    private ?string $discountDescription = null;

    /**
     * @var string|null
     */
    private ?string $lastOrderStatus = null;

    /**
     * @var string|null
     */
    private ?string $depositAmount = null;

    /**
     * @var object|null
     */
    private ?object $paid = null;

    /**
     * @var object|null
     */
    private ?object $discountTotal = null;

    /**
     * @var float|int
     */
    private float|int $discountValue = 0;

    /**
     * @var string
     */
    private string $accountingSystemId = '';

    /**
     * @var int
     */
    private int $dueOffsetDays = 0;

    /**
     * @var string
     */
    private string $language = '';

    /**
     * @var string|null
     */
    private ?string $poNumber = null;

    /**
     * @var string
     */
    private string $displayStatus = '';

    /**
     * @var string|null
     */
    private ?string $datePaid = null;

    /**
     * @var int
     */
    private int $sentId = 0;

    /**
     * @var string|null
     */
    private ?string $autobillStatus = null;

    /**
     * @var string|null
     */
    private ?string $returnUri = null;

    /**
     * @var string
     */
    private string $createdAt = '';

    /**
     * @var bool
     */
    private bool $autoBill = false;

    /**
     * @var string
     */
    private string $accountId = '';

    /**
     * @var array<InvoiceLine>
     */
    private array $lines = [];

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
     * @param int $id
     * @return Invoice
     */
    public function setId(int $id): Invoice
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $invoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber(string $invoiceNumber): Invoice
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @param int $customerId
     * @return Invoice
     */
    public function setCustomerId(int $customerId): Invoice
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @param string $firstName
     * @return Invoice
     */
    public function setFirstName(string $firstName): Invoice
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $lastName
     * @return Invoice
     */
    public function setLastName(string $lastName): Invoice
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $address
     * @return Invoice
     */
    public function setAddress(string $address): Invoice
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $street
     * @return Invoice
     */
    public function setStreet(string $street): Invoice
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string|null $street2
     * @return Invoice
     */
    public function setStreet2(?string $street2): Invoice
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @param string $city
     * @return Invoice
     */
    public function setCity(string $city): Invoice
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $province
     * @return Invoice
     */
    public function setProvince(string $province): Invoice
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param string $postalCode
     * @return Invoice
     */
    public function setPostalCode(string $postalCode): Invoice
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @param string $country
     * @return Invoice
     */
    public function setCountry(string $country): Invoice
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param object $amount
     * @return Invoice
     */
    public function setAmount(object $amount): Invoice
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $currencyCode
     * @return Invoice
     */
    public function setCurrencyCode(string $currencyCode): Invoice
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param string $organization
     * @return Invoice
     */
    public function setOrganization(string $organization): Invoice
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param string $currentOrganization
     * @return Invoice
     */
    public function setCurrentOrganization(string $currentOrganization): Invoice
    {
        $this->currentOrganization = $currentOrganization;
        return $this;
    }

    /**
     * @param string $notes
     * @return Invoice
     */
    public function setNotes(string $notes): Invoice
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $status
     * @return Invoice
     */
    public function setStatus(string $status): Invoice
    {
        if (!isset($this->statuses[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }

        $this->status = $status;
        return $this;
    }

    /**
     * @param int $ownerId
     * @return Invoice
     */
    public function setOwnerId(int $ownerId): Invoice
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @param string|null $depositPercentage
     * @return Invoice
     */
    public function setDepositPercentage(?string $depositPercentage): Invoice
    {
        $this->depositPercentage = $depositPercentage;
        return $this;
    }

    /**
     * @param string $createDate
     * @return Invoice
     */
    public function setCreateDate(string $createDate): Invoice
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @param object $outstanding
     * @return Invoice
     */
    public function setOutstanding(object $outstanding): Invoice
    {
        $this->outstanding = $outstanding;
        return $this;
    }

    /**
     * @param string $paymentStatus
     * @return Invoice
     */
    public function setPaymentStatus(string $paymentStatus): Invoice
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * @param string|null $vatName
     * @return Invoice
     */
    public function setVatName(?string $vatName): Invoice
    {
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param string $vatNumber
     * @return Invoice
     */
    public function setVatNumber(string $vatNumber): Invoice
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @param bool $gmail
     * @return Invoice
     */
    public function setGmail(bool $gmail): Invoice
    {
        $this->gmail = $gmail;
        return $this;
    }

    /**
     * @param string $v3Status
     * @return Invoice
     */
    public function setV3Status(string $v3Status): Invoice
    {
        $this->v3Status = $v3Status;
        return $this;
    }

    /**
     * @param int $parent
     * @return Invoice
     */
    public function setParent(int $parent): Invoice
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param string|null $disputeStatus
     * @return Invoice
     */
    public function setDisputeStatus(?string $disputeStatus): Invoice
    {
        $this->disputeStatus = $disputeStatus;
        return $this;
    }

    /**
     * @param string $depositStatus
     * @return Invoice
     */
    public function setDepositStatus(string $depositStatus): Invoice
    {
        $this->depositStatus = $depositStatus;
        return $this;
    }

    /**
     * @param int $estimateId
     * @return Invoice
     */
    public function setEstimateId(int $estimateId): Invoice
    {
        $this->estimateId = $estimateId;
        return $this;
    }

    /**
     * @param int $extArchive
     * @return Invoice
     */
    public function setExtArchive(int $extArchive): Invoice
    {
        $this->extArchive = $extArchive;
        return $this;
    }

    /**
     * @param string $template
     * @return Invoice
     */
    public function setTemplate(string $template): Invoice
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @param int $basecampId
     * @return Invoice
     */
    public function setBasecampId(int $basecampId): Invoice
    {
        $this->basecampId = $basecampId;
        return $this;
    }

    /**
     * @param string|null $generationDate
     * @return Invoice
     */
    public function setGenerationDate(?string $generationDate): Invoice
    {
        $this->generationDate = $generationDate;
        return $this;
    }

    /**
     * @param bool $showAttachments
     * @return Invoice
     */
    public function setShowAttachments(bool $showAttachments): Invoice
    {
        $this->showAttachments = $showAttachments;
        return $this;
    }

    /**
     * @param int $visState
     * @return Invoice
     */
    public function setVisState(int $visState): Invoice
    {
        $this->visState = $visState;
        return $this;
    }

    /**
     * @param string $dueDate
     * @return Invoice
     */
    public function setDueDate(string $dueDate): Invoice
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @param string $updated
     * @return Invoice
     */
    public function setUpdated(string $updated): Invoice
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @param string|null $terms
     * @return Invoice
     */
    public function setTerms(?string $terms): Invoice
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @param string $description
     * @return Invoice
     */
    public function setDescription(string $description): Invoice
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param ?string $discountDescription
     * @return Invoice
     */
    public function setDiscountDescription(?string $discountDescription): Invoice
    {
        $this->discountDescription = $discountDescription;
        return $this;
    }

    /**
     * @param string|null $lastOrderStatus
     * @return Invoice
     */
    public function setLastOrderStatus(?string $lastOrderStatus): Invoice
    {
        $this->lastOrderStatus = $lastOrderStatus;
        return $this;
    }

    /**
     * @param string|null $depositAmount
     * @return Invoice
     */
    public function setDepositAmount(?string $depositAmount): Invoice
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * @param object $paid
     * @return Invoice
     */
    public function setPaid(object $paid): Invoice
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @param object $discountTotal
     * @return Invoice
     */
    public function setDiscountTotal(object $discountTotal): Invoice
    {
        $this->discountTotal = $discountTotal;
        return $this;
    }

    /**
     * @param float|int $discountValue
     * @return Invoice
     */
    public function setDiscountValue(float|int $discountValue): Invoice
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param string $accountingSystemId
     * @return Invoice
     */
    public function setAccountingSystemId(string $accountingSystemId): Invoice
    {
        $this->accountingSystemId = $accountingSystemId;
        return $this;
    }

    /**
     * @param int $dueOffsetDays
     * @return Invoice
     */
    public function setDueOffsetDays(int $dueOffsetDays): Invoice
    {
        $this->dueOffsetDays = $dueOffsetDays;
        return $this;
    }

    /**
     * @param string $language
     * @return Invoice
     */
    public function setLanguage(string $language): Invoice
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string|null $poNumber
     * @return Invoice
     */
    public function setPoNumber(?string $poNumber): Invoice
    {
        $this->poNumber = $poNumber;
        return $this;
    }

    /**
     * @param string $displayStatus
     * @return Invoice
     */
    public function setDisplayStatus(string $displayStatus): Invoice
    {
        $this->displayStatus = $displayStatus;
        return $this;
    }

    /**
     * @param string|null $datePaid
     * @return Invoice
     */
    public function setDatePaid(?string $datePaid): Invoice
    {
        $this->datePaid = $datePaid;
        return $this;
    }

    /**
     * @param int $sentId
     * @return Invoice
     */
    public function setSentId(int $sentId): Invoice
    {
        $this->sentId = $sentId;
        return $this;
    }

    /**
     * @param string|null $autobillStatus
     * @return Invoice
     */
    public function setAutobillStatus(?string $autobillStatus): Invoice
    {
        $this->autobillStatus = $autobillStatus;
        return $this;
    }

    /**
     * @param string|null $returnUri
     * @return Invoice
     */
    public function setReturnUri(?string $returnUri): Invoice
    {
        $this->returnUri = $returnUri;
        return $this;
    }

    /**
     * @param string $createdAt
     * @return Invoice
     */
    public function setCreatedAt(string $createdAt): Invoice
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param bool $autoBill
     * @return Invoice
     */
    public function setAutoBill(bool $autoBill): Invoice
    {
        $this->autoBill = $autoBill;
        return $this;
    }

    /**
     * @param string $accountId
     * @return Invoice
     */
    public function setAccountId(string $accountId): Invoice
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @param InvoiceLine $line
     * @return Invoice
     */
    public function addLine(InvoiceLine $line): Invoice
    {
        $lineId = count($this->lines) + 1;
        $line->setLineId($lineId);
        $this->lines[] = $line;
        return $this;
    }

    /**
     * @param array<InvoiceLine> $lines
     * @return Invoice
     */
    public function setLines(array $lines): Invoice
    {
        foreach ($lines as $line) {
            $this->addLine($line);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return object|null
     */
    public function getAmount(): ?object
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @return string
     */
    public function getCurrentOrganization(): string
    {
        return $this->currentOrganization;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return array<string,int>
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @return string|null
     */
    public function getDepositPercentage(): ?string
    {
        return $this->depositPercentage;
    }

    /**
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return object|null
     */
    public function getOutstanding(): ?object
    {
        return $this->outstanding;
    }

    /**
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    /**
     * @return string|null
     */
    public function getVatName(): ?string
    {
        return $this->vatName;
    }

    /**
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * @return bool
     */
    public function getGmail(): bool
    {
        return $this->gmail;
    }

    /**
     * @return string
     */
    public function getV3Status(): string
    {
        return $this->v3Status;
    }

    /**
     * @return int
     */
    public function getParent(): int
    {
        return $this->parent;
    }

    /**
     * @return string|null
     */
    public function getDisputeStatus(): ?string
    {
        return $this->disputeStatus;
    }

    /**
     * @return string
     */
    public function getDepositStatus(): string
    {
        return $this->depositStatus;
    }

    /**
     * @return int
     */
    public function getEstimateId(): int
    {
        return $this->estimateId;
    }

    /**
     * @return int
     */
    public function getExtArchive(): int
    {
        return $this->extArchive;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @return int
     */
    public function getBasecampId(): int
    {
        return $this->basecampId;
    }

    /**
     * @return string|null
     */
    public function getGenerationDate(): ?string
    {
        return $this->generationDate;
    }

    /**
     * @return bool
     */
    public function getShowAttachments(): bool
    {
        return $this->showAttachments;
    }

    /**
     * @return int
     */
    public function getVisState(): int
    {
        return $this->visState;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @return string
     */
    public function getUpdated(): string
    {
        return $this->updated;
    }

    /**
     * @return string|null
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getDiscountDescription(): ?string
    {
        return $this->discountDescription;
    }

    /**
     * @return string|null
     */
    public function getLastOrderStatus(): ?string
    {
        return $this->lastOrderStatus;
    }

    /**
     * @return string|null
     */
    public function getDepositAmount(): ?string
    {
        return $this->depositAmount;
    }

    /**
     * @return object|null
     */
    public function getPaid(): ?object
    {
        return $this->paid;
    }

    /**
     * @return object|null
     */
    public function getDiscountTotal(): ?object
    {
        return $this->discountTotal;
    }

    /**
     * @return float|int
     */
    public function getDiscountValue(): float|int
    {
        return $this->discountValue;
    }

    /**
     * @return string
     */
    public function getAccountingSystemId(): string
    {
        return $this->accountingSystemId;
    }

    /**
     * @return int
     */
    public function getDueOffsetDays(): int
    {
        return $this->dueOffsetDays;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string|null
     */
    public function getPoNumber(): ?string
    {
        return $this->poNumber;
    }

    /**
     * @return string
     */
    public function getDisplayStatus(): string
    {
        return $this->displayStatus;
    }

    /**
     * @return string|null
     */
    public function getDatePaid(): ?string
    {
        return $this->datePaid;
    }

    /**
     * @return int
     */
    public function getSentId(): int
    {
        return $this->sentId;
    }

    /**
     * @return string|null
     */
    public function getAutobillStatus(): ?string
    {
        return $this->autobillStatus;
    }

    /**
     * @return string|null
     */
    public function getReturnUri(): ?string
    {
        return $this->returnUri;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return bool
     */
    public function getAutoBill(): bool
    {
        return $this->autoBill;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @return array<InvoiceLine>
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        return (object) $this->toArray();
    }

    /**
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'invoiceid' => $this->id,
            'invoice_number' => $this->invoiceNumber,
            'customerid' => $this->customerId,
            'fname' => $this->firstName,
            'lname' => $this->lastName,
            'address' => $this->address,
            'street' => $this->street,
            'street2' => $this->street2,
            'city' => $this->city,
            'province' => $this->province,
            'code' => $this->postalCode,
            'country' => $this->country,
            'amount' => $this->amount,
            'currency_code' => $this->currencyCode,
            'organization' => $this->organization,
            'current_organization' => $this->currentOrganization,
            'notes' => $this->notes,
            'status' => $this->statuses[$this->status],
            'ownerid' => $this->ownerId,
            'deposit_percentage' => $this->depositPercentage,
            'create_date' => $this->createDate,
            'outstanding' => $this->outstanding,
            'payment_status' => $this->paymentStatus,
            'vat_name' => $this->vatName,
            'vat_number' => $this->vatNumber,
            'gmail' => $this->gmail,
            'v3_status' => $this->v3Status,
            'parent' => $this->parent,
            'dispute_status' => $this->disputeStatus,
            'estimateid' => $this->estimateId,
            'ext_archive' => $this->extArchive,
            'template' => $this->template,
            'basecampid' => $this->basecampId,
            'generation_date' => $this->generationDate,
            'show_attachments' => $this->showAttachments,
            'vis_state' => $this->visState,
            'due_date' => $this->dueDate,
            'updated' => $this->updated,
            'terms' => $this->terms,
            'description' => $this->description,
            'discount_description' => $this->discountDescription,
            'last_order_status' => $this->lastOrderStatus,
            'deposit_amount' => $this->depositAmount,
            'paid' => $this->paid,
            'discount_total' => $this->discountTotal,
            'discount_value' => $this->discountValue,
            'accounting_systemid' => $this->accountingSystemId,
            'due_offset_days' => $this->dueOffsetDays,
            'language' => $this->language,
            'po_number' => $this->poNumber,
            'display_status' => $this->displayStatus,
            'date_paid' => $this->datePaid,
            'sentid' => $this->sentId,
            'autobill_status' => $this->autobillStatus,
            'return_uri' => $this->returnUri,
            'created_at' => $this->createdAt,
            'auto_bill' => $this->autoBill,
            'accountid' => $this->accountId,
            'lines' => is_array($this->lines) ? array_map(function ($val) {
                return $val->toArray();
            }, $this->lines) : $this->lines
        ]);
    }

    /**
     * @param array<mixed> $data
     * @return Invoice
     */
    public function fromArray(array $data): Invoice
    {
        return $this->fromObject($this->arrayToObject($data));
    }

    /**
     * @param object $data
     * @return Invoice
     */
    public function fromObject(object $data): Invoice
    {
        $this->setId($data->id);
        $this->setAccountId($data->accountid);
        $this->setAccountingSystemId($data->accounting_systemid);
        $this->setAddress($data->address);
        $this->setAmount($data->amount);
        $this->setAutoBill($data->auto_bill);
        $this->setAutobillStatus($data->autobill_status);
        $this->setBasecampid($data->basecampid);
        $this->setCity($data->city);
        $this->setPostalCode($data->code);
        $this->setCountry($data->country);
        $this->setCreatedAt($data->created_at);
        $this->setCurrentOrganization($data->current_organization);
        $this->setCustomerId($data->customerid);
        $this->setDatePaid($data->date_paid);
        $this->setDescription($data->description);
        $this->setDepositAmount($data->deposit_amount ?? null);
        $this->setDepositPercentage($data->deposit_percentage);
        $this->setDepositStatus($data->deposit_status);
        $this->setDiscountDescription($data->discount_description);
        $this->setDiscountTotal($data->discount_total);
        $this->setDiscountValue(floatval($data->discount_value));
        $this->setDisplayStatus($data->display_status);
        $this->setDisputeStatus($data->dispute_status);
        $this->setDueDate($data->due_date);
        $this->setDueOffsetDays($data->due_offset_days);
        $this->setEstimateid($data->estimateid);
        $this->setExtArchive($data->ext_archive);
        $this->setFirstName($data->fname);
        $this->setGmail($data->gmail);
        $this->setGenerationDate($data->generation_date);
        $this->setInvoiceNumber($data->invoice_number);
        $this->setLanguage($data->language);
        $this->setLastOrderStatus($data->last_order_status);
        $this->setLastName($data->lname);
        $this->setNotes($data->notes);
        $this->setStatus(array_flip($this->statuses)[$data->status]);
        $this->setOrganization($data->organization);
        $this->setOutstanding($data->outstanding);
        $this->setPaid($data->paid);
        $this->setParent($data->parent);
        $this->setPaymentStatus($data->payment_status);
        $this->setPoNumber($data->po_number);
        $this->setProvince($data->province);
        $this->setReturnUri($data->return_uri);
        $this->setSentId($data->sentid);
        $this->setShowAttachments($data->show_attachments);
        $this->setStreet($data->street);
        $this->setStreet2($data->street2);
        $this->setTemplate($data->template);
        $this->setTerms($data->terms);
        $this->setUpdated($data->updated);
        $this->setV3Status($data->v3_status);
        $this->setVatName($data->vat_name ?? null);
        $this->setVatNumber($data->vat_number);
        $this->setVisState($data->vis_state);

        if (isset($data->lines)) {
            foreach ($data->lines as $value) {
                $this->addLine((new InvoiceLine())->fromObject($value));
            }
        }

        return $this;
    }

    /**
     * @param string|int $id
     * @param bool $lines
     * @return Invoice
     */
    public function getById(string|int $id, bool $lines = false): Invoice
    {
        $endpoint = 'invoices/invoices/' . $id . ($lines ? '?include%5B%5D=lines' : '');
        return $this->fromObject($this->conn->get($endpoint)->invoice);
    }

    /**
     * @return Invoice
     */
    public function create(): Invoice
    {
        return $this->fromObject($this->conn->post('invoices/invoices', [
            "invoice" => $this->toArray()
        ], true)->invoice);
    }

    /**
     * @param int|null $id
     * @return Invoice
     */
    public function update(?int $id = null): Invoice
    {
        return $this->fromObject($this->conn->put('invoices/invoices/' . strval($id ?? $this->getId()), [
            "invoice" => $this->toArray()
        ], true)->invoice);
    }

    /**
     * @param int|null $id
     * @return Invoice
     */
    public function updateLines(?int $id = null): Invoice
    {
        $lines = array_map(function ($val) {
            return $val->toArray();
        }, $this->getLines());

        return $this->fromObject($this->conn->put('invoices/invoices/' . strval($id ?? $this->getId()), [
            "invoice" => [
                "lines" => $lines
            ]
        ], true)->invoice);
    }

    /**
     * @param int|null $id
     * @return Invoice
     */
    public function delete(?int $id = null): Invoice
    {
        return $this->fromObject($this->conn->put('invoices/invoices/' . strval($id  ?? $this->getId()), [
            "invoice" => [
                "vis_state" => 1
            ]
        ], true)->invoice);
    }

    /**
     * @param int|null $id
     * @return Invoice
     */
    public function markAsSent(?int $id = null): Invoice
    {
        return $this->fromObject($this->conn->put('invoices/invoices/' . strval($id ?? $this->getId()), [
            "invoice" => [
                "action_mark_as_sent" => true
            ]
        ], true)->invoice);
    }

    /**
     * @param array<string>|string $email
     * @param int|null $id
     * @param string|null $subject
     * @param string|null $body
     * @param bool $includePdf
     * @return Invoice
     */
    public function sendToEMail(
        array|string $email,
        ?int $id = null,
        ?string $subject = null,
        ?string $body = null,
        bool $includePdf = false
    ): Invoice {
        if (!is_array($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new \InvalidArgumentException("Email is not valid");
            }

            $email = [$email];
        }

        return $this->fromObject($this->conn->put('invoices/invoices/' . strval($id ?? $this->getId()), [
            "invoice" => [
                "action_email" => true,
                "email_recipients" => $email,
                "email_include_pdf" => $includePdf,
                "invoice_customized_email" => [
                    "subject" => $subject ?? $this->conn->getAccount()->getName() . " sent you an invoice (" . $this->getInvoiceNumber() . ")", // phpcs:ignore
                    "body" => $body ?? "The invoice of the product or products you have purchased below has been sent by " . $this->conn->getAccount()->getName() . " via FreshBooks.", // phpcs:ignore
                ]
            ]
        ], true)->invoice);
    }
}

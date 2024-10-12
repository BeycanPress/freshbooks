<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Connection;

class Payment
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var int
     */
    private int $invoiceId;

    /**
     * @var int
     */
    private int $clientId;

    /**
     * @var object
     */
    private object $amount;

    /**
     * @var string
     */
    private string $accountingSystemId;

    /**
     * @var int|null
     */
    private ?int $bulkPaymentId = null;

    /**
     * @var int|null
     */
    private ?int $creditId = null;

    /**
     * @var string
     */
    private string $date;

    /**
     * @var bool
     */
    private bool $fromCredit;

    /**
     * @var string|null
     */
    private ?string $gateway = null;

    /**
     * @var int
     */
    private int $logId;

    /**
     * @var string
     */
    private string $note;

    /**
     * @var string|null
     */
    private ?string $orderId = null;

    /**
     * @var int|null
     */
    private ?int $overPaymentId = null;

    /**
     * @var bool|null
     */
    private ?bool $sendClientNotification = null;

    /**
     * @var string|null
     */
    private ?string $transactionId = null;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var array<string>
     */
    private array $types = [
        '2Checkout',
        'ACH',
        'Bank Transfer',
        'Cash',
        'Check',
        'Credit Card',
        'Debit',
        'Other',
        'PayPal',
        'AMEX',
        'Diners Club',
        'Discover',
        'JCB',
        'MasterCard',
        'Visa'
    ];

    /**
     * @var string
     */
    private string $updated;

    /**
     * @var int
     */
    private int $visState;

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
     * @return Payment
     */
    public function setId(int $id): Payment
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $invoiceId
     * @return Payment
     */
    public function setInvoiceId(int $invoiceId): Payment
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @param int $clientId
     * @return Payment
     */
    public function setClientId(int $clientId): Payment
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @param object $amount
     * @return Payment
     */
    public function setAmount(object $amount): Payment
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $accountingSystemId
     * @return Payment
     */
    public function setAccountingSystemId(string $accountingSystemId): Payment
    {
        $this->accountingSystemId = $accountingSystemId;
        return $this;
    }

    /**
     * @param int|null $bulkPaymentId
     * @return Payment
     */
    public function setBulkPaymentId(?int $bulkPaymentId): Payment
    {
        $this->bulkPaymentId = $bulkPaymentId;
        return $this;
    }

    /**
     * @param int|null $creditId
     * @return Payment
     */
    public function setCreditId(?int $creditId): Payment
    {
        $this->creditId = $creditId;
        return $this;
    }

    /**
     * @param string $date
     * @return Payment
     */
    public function setDate(string $date): Payment
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param bool $fromCredit
     * @return Payment
     */
    public function setFromCredit(bool $fromCredit): Payment
    {
        $this->fromCredit = $fromCredit;
        return $this;
    }

    /**
     * @param string|null $gateway
     * @return Payment
     */
    public function setGateway(?string $gateway): Payment
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * @param int $logId
     * @return Payment
     */
    public function setLogId(int $logId): Payment
    {
        $this->logId = $logId;
        return $this;
    }

    /**
     * @param string $note
     * @return Payment
     */
    public function setNote(string $note): Payment
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param string|null $orderId
     * @return Payment
     */
    public function setOrderId(?string $orderId): Payment
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param int|null $overPaymentId
     * @return Payment
     */
    public function setOverPaymentId(?int $overPaymentId): Payment
    {
        $this->overPaymentId = $overPaymentId;
        return $this;
    }

    /**
     * @param bool|null $sendClientNotification
     * @return Payment
     */
    public function setSendClientNotification(?bool $sendClientNotification): Payment
    {
        $this->sendClientNotification = $sendClientNotification;
        return $this;
    }

    /**
     * @param string|null $transactionId
     * @return Payment
     */
    public function setTransactionId(?string $transactionId): Payment
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @param string $type
     * @return Payment
     */
    public function setType(string $type): Payment
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $updated
     * @return Payment
     */
    public function setUpdated(string $updated): Payment
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @param int $visState
     * @return Payment
     */
    public function setVisState(int $visState): Payment
    {
        $this->visState = $visState;
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
     * @return int
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @return object
     */
    public function getAmount(): object
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAccountingSystemId(): string
    {
        return $this->accountingSystemId;
    }

    /**
     * @return int|null
     */
    public function getBulkPaymentId(): ?int
    {
        return $this->bulkPaymentId;
    }

    /**
     * @return int|null
     */
    public function getCreditId(): ?int
    {
        return $this->creditId;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return bool
     */
    public function isFromCredit(): bool
    {
        return $this->fromCredit;
    }

    /**
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * @return int
     */
    public function getLogId(): int
    {
        return $this->logId;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @return int|null
     */
    public function getOverPaymentId(): ?int
    {
        return $this->overPaymentId;
    }

    /**
     * @return bool|null
     */
    public function getSendClientNotification(): ?bool
    {
        return $this->sendClientNotification;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array<string>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @return string
     */
    public function getUpdated(): string
    {
        return $this->updated;
    }

    /**
     * @return int
     */
    public function getVisState(): int
    {
        return $this->visState;
    }

    /**
     * @return array<string>
     */
    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'invoiceid' => $this->invoiceId,
            'clientid' => $this->clientId,
            'amount' => $this->amount,
            'accounting_systemid' => $this->accountingSystemId,
            'bulk_paymentid' => $this->bulkPaymentId,
            'creditid' => $this->creditId,
            'date' => $this->date,
            'from_credit' => $this->fromCredit,
            'gateway' => $this->gateway,
            'logid' => $this->logId,
            'note' => $this->note,
            'orderid' => $this->orderId,
            'overpaymentid' => $this->overPaymentId,
            'send_client_notification' => $this->sendClientNotification,
            'transactionid' => $this->transactionId,
            'type' => $this->type,
            'updated' => $this->updated,
            'vis_state' => $this->visState,
        ]);
    }

    /**
     * @param object $data
     * @return Payment
     */
    public function fromObject(object $data): Payment
    {
        return $this->setId($data->id)
            ->setInvoiceId($data->invoiceid)
            ->setClientId($data->clientid)
            ->setAmount($data->amount)
            ->setAccountingSystemId($data->accounting_systemid)
            ->setBulkPaymentId($data->bulk_paymentid)
            ->setCreditId($data->creditid)
            ->setDate($data->date)
            ->setFromCredit($data->from_credit)
            ->setGateway($data->gateway)
            ->setLogId($data->logid)
            ->setNote($data->note)
            ->setOrderId($data->orderid)
            ->setOverPaymentId($data->overpaymentid)
            ->setSendClientNotification($data->send_client_notification)
            ->setTransactionId($data->transactionid)
            ->setType($data->type)
            ->setUpdated($data->updated)
            ->setVisState($data->vis_state);
    }

    /**
     * @param string $id
     * @return Payment
     */
    public function getById(string $id): Payment
    {
        return $this->fromObject($this->conn->get('payments/payments/' . $id)->payment);
    }

    /**
     * @return Payment
     */
    public function create(): Payment
    {
        return $this->fromObject($this->conn->post('payments/payments', [
            "payment" => $this->toArray()
        ], true)->payment);
    }

    /**
     * @param int|null $id
     * @return Payment
     */
    public function update(?int $id = null): Payment
    {
        return $this->fromObject($this->conn->put('payments/payments/' . strval($id ?? $this->getId()), [
            "payment" => array_filter($this->toArray(), function ($key) {
                return !in_array($key, ['id', 'clientid', 'accounting_systemid', 'updated']);
            }, ARRAY_FILTER_USE_KEY)
        ], true)->payment);
    }

    /**
     * @param int|null $id
     * @return Invoice
     */
    public function delete(?int $id = null): Payment
    {
        return $this->fromObject($this->conn->put('payments/payments/' . strval($id  ?? $this->getId()), [
            "payment" => [
                "vis_state" => 1
            ]
        ], true)->payment);
    }
}

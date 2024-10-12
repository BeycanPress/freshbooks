<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use BeycanPress\FreshBooks\Connection;
use BeycanPress\FreshBooks\Model\InvoiceLine;

$connection = new Connection(
    '0b57a2d8d057385aeeed05f4af6413b4ca4cc0f48deb632b9e589bea792b8da5',
    '56b5b2c24add470de3c8dcd9b3096724e9eb96efbad3244c4f0df16415fe6007',
    'https://hosting.beycanpress.net/freshbooks'
);

$connection->setAccount();

$email = "test@gmail.com";

if (!$client = $connection->client()->searchByEmail($email)) {
    $client = $connection->client()
        ->setEmail($email)
        ->setFirstName("Test")
        ->setLastName("Spec")
        ->setCurrencyCode('USD')
        ->create();
}


$line = (new InvoiceLine())
->setName("Test Item")
->setAmount((object) [
    'amount' => 100,
    'currency_code' => 'USD'
])
->setQuantity(1);

$invoice = $connection->invoice()
    ->setStatus("draft")
    ->setCustomerId($client->getId())
    ->setCreateDate(date("Y-m-d"))
    ->setLines([$line])
    ->create();

$connection->payment()
    ->setInvoiceId($invoice->getId())
    ->setAmount((object) [
        "amount" => $invoice->getOutstanding()->amount
    ])
    ->setDate(date("Y-m-d"))
    ->setType("2Checkout")
    ->create();

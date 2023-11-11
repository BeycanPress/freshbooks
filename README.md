# BeycanPress\FreshBooks API SDK #

As BeycanPress, we decided to use FreshBooks in our company. However, we discovered that there is no integration plugin for WooCommerce. There were many automation systems but we just wanted to generate automatic invoice so we prepared this PHP SDK. We invite users of FreshBooks to contribute. For now, we only integrated Clients, Invoices, Expense and Payments models.

WooCommerce FreshBooks integration plugin enhanced with this PHP SDK: [WooCommerce FreshBooks Integration](https://github.com/BeycanPress/woocommerce-freshbooks-plugin)

## How to use?

### Installation

```bash
composer require beycanpress/freshbooks
```

### Fist Connection

```php
<?php

use BeycanPress\FreshBooks\Connection;

$connection = new Connection(
    'your_client_id', 
    'your_client_secret', 
    'your_redirect_uri'
);

// Get authorization url
$authRequestUrl = $connection->getAuthRequestUrl();
```
You will be redirected to the URL you got with the above method to get access from FreshBooks. When you confirm access via FreshBooks, you will be redirected to the redirect url address with "code" GET parameter.

By taking this "code" parameter, your FreshBooks connection will be established after receiving the access code via the method below.  However, you will need to do this process once. Because "access_token" will continue to be updated with "refresh_token" afterwards.

```php
<?php

// Get access token
$authCode = isset($_GET['code']) ? $_GET['code'] : null;
$conneciton->getAccessTokenByAuthCode($authCode);
```

Then you need to use the "setAccount" method to tell the SDK which account to operate on as follows. If you don't pass an $id parameter, it will choose the first account. Or you can use the "getAccounts" method to get the accounts, save them in your database and set the account selected there.

```php
<?php

// Set account and get account id for save db
$account = $conneciton->setAccount(?$id)->getAccount();

// save $account->getId() to your database
```

### Next Connections

If you have already made the first link as above, just use the code below for the subsequent links.

```php
<?php

use BeycanPress\FreshBooks\Connection;

$connection = new Connection(
    'your_client_id', 
    'your_client_secret', 
    'your_redirect_uri'
);

if (file_exists($connection->getTokenFile())) {
    $connection->refreshAuthentication();
    $connection->setAccount(/* get account id from your database */);
}
```

### Connection Methods

```php

// Get authorization url
$authRequestUrl = $connection->getAuthRequestUrl();

// Get access token
$conneciton->getAccessTokenByAuthCode(/* get code from $authRequestUrl */);

// Refresh access token
// $direct (bool) is optional. If you want to renew instantly before the token expires.
$connection->refreshAuthentication();

// Set account
// $id (int) is optional. If you don't pass an $id parameter, it will choose the first account.
$connection->setAccount(?$id);

// Get accounts
$accounts = $connection->getAccounts();

// Get current account
$account = $connection->getAccount();

// Get token file path
$tokenFile = $connection->getTokenFile();

// Get token data
$tokenData = $connection->getTokenData();

// Delete token file
$tokenData = $connection->deleteTokenFile();

// Get token expire status
$expireStatus = $connection->getExpireStatus();

// Revoke access token
$connection->revokeAccessToken();

// Get profile
$profile = $connection->getProfile();

// Get business memberships
$business = $connection->getBusinessMemberships();

// Get first business membership
$businessMember = $connection->getFirstAccount();

// Create client model
$client = $connection->client();

// Create invoice model
$invoice = $connection->invoice();

// Create expense model
$expense = $connection->expense();

// Create payment model
$payment = $connection->payment();
```

### Using Models

When using models, you need help from the FreshBooks API documentation. Because for example, if you don't want to add discount data, all you need to do is to leave the discountValue property empty. So you don't add any data. So we recommend you to check the documentation.

[FreshBooks API Documentation](https://www.freshbooks.com/api/start)

In addition, each model has getById, create, update, delete methods. You can already see this in the documentation. update and delete methods take $id parameter. But this parameter is not mandatory. Because if you have already retrieved an invoice or expense data with getById. The current id set in the model is used.

When deriving an object from a model, you need to give it the "Connection" class in the constructor method. However, there is an object derivation method for each model in the "Connection" class without this. You can see it in the examples below.

```php

// Examples

use BeycanPress\FreshBooks\Connection;
use BeycanPress\FreshBooks\Models\Client;
use BeycanPress\FreshBooks\Models\Invoice;
use BeycanPress\FreshBooks\Models\Expense;
use BeycanPress\FreshBooks\Models\Payment;
use BeycanPress\FreshBooks\Models\InvoiceLine;

$connection = new Connection(
    'your_client_id', 
    'your_client_secret', 
    'your_redirect_uri'
);

if (file_exists($connection->getTokenFile())) {
    $connection->refreshAuthentication();
    $connection->setAccount(/* get account id from your database */);
}

$invoice = new Invoice($connection);
// or
$invoice = $connection->invoice();

// Get invoice by id
$invoice = $invoice->getById(/* invoice id */);

// Delete invoice
$invoice->delete();

// Update invoice
$invoice->setDescription(/* description */);

$invoice->update();

// Create client if not exist
$client = $conneciton->client();

if (!$client->searchByEmail(/* email */)) {
    $client->setEmail(/* email */)
    ->setFirstName(/* first name */)
    ->setLastName(/* last name */)
    ->setOrganization(/* organization */)
    ->setMobilePhone(/* mobile phone */)
    ->setBillingStreet(/* billing street */)
    ->setBillingStreet2(/* billing street 2 */)
    ->setBillingCity(/* billing city */)
    ->setBillingProvince(/* billing province */)
    ->setBillingPostalCode(/* billing postal code */)
    ->setBillingCountry(/* billing country */)
    ->setCurrencyCode(/* currency code */)
    ->create();
}

$lines = [];

$lines[] = (new InvoiceLine())
->setName(/* name */)
->setAmount((object) [
    "amount" => /* amount */,
    "code" => /* currency code */
])
->setQuantity(/* quantity */);

if (/* if have taxes */) {
    $taxes = [/* tax 1 */, /* tax 2 */];

    if (isset($taxes[0])) {
        $tax = $taxes[0];
        $line->setTaxName1(/* tax name */)
        ->setTaxAmount1(/* tax amount */);
    }

    if (isset($taxes[1])) {
        $tax = $taxes[1];
        $line->setTaxName2(/* tax name */)
        ->setTaxAmount2(/* tax amount */);
    }
}
// Create invoice
$invoice = $connection->invoice()
->setCustomerId($client->getId())
->setStatus("draft")
->setCreateDate(date("Y-m-d"))
->setLines($lines);

if (/* if have discount */) {
    $invoice->setDiscountValue(/* discount value */)
    ->setDiscountDescription(/* discount description (discount code) */);
}

$invoice->create();

if (/* if you want send email to customer */) {
    $invoice->sendToEMail($email);
}

if (/* if invoice already paid */) {
    $connection->payment()
    ->setInvoiceId($invoice->getId())
    ->setAmount((object) [
        "amount" => $invoice->getOutstanding()->amount
    ])
    ->setDate(date("Y-m-d"))
    ->setType("Other" /* or "Credit" */) 
    ->create();
}

// or you can see all payment types: Payment::$types (private property)
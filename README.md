# BeycanPress\FreshBooks API SDK #

As BeycanPress, we decided to use FreshBooks in our company. However, we discovered that there is no integration plugin for WooCommerce. There were many automation systems but we just wanted to generate automatic invoice so we prepared this PHP SDK. We invite users of FreshBooks to contribute. For now, we only made Clients, Invoices and Payments API improvements.

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
$account = $conn->setAccount(?$id)->getAccount();

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
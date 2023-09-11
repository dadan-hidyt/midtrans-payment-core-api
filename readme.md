
## MIDTRANS CORE API UN OFFICIAL

Library midtrans tidak official yang di gunakan untuk berkomunikasi dengan api midtrans, library ini di khususkan untuk melakukan transaksi,mengecek transaksi
## Cara Install

##### Composer Instalation
```
composer require dadandev/midtranspay
```
#### Cara Pake
``` php
<?php

use DadanDev\MidtransPay\Configurasi;
use DadanDev\MidtransPay\Environment;
use DadanDev\MidtransPay\PayMent;

include 'vendor/autoload.php';
$config = new Configurasi(Environment::DEVELOPMENT);
$config->setServerKey('<your server key>');

$payment = new PayMent($config);


$response = $payment->pay([
    "payment_type" => "cstore",
    "transaction_details" => [
        "order_id" => "INV-".strtoupper(uniqid()),
        "gross_amount" => 44000,
    ],
    "cstore" => [
        'store' => 'alfamart',
    ],
  
    'customer_details' => [
        'first_name' => "Dadan Efendi",
        'last_name' => "Indrayan",
        "email" => 'dadan@gmail.com',
    ]
   
]);

var_dump($response);
```
<?php

use DadanDev\MidtransPay\Configurasi;
use DadanDev\MidtransPay\Environment;
use DadanDev\MidtransPay\PayMent;

include 'vendor/autoload.php';
$config = new Configurasi(Environment::DEVELOPMENT);
$config->setServerKey('SB-Mid-server-vxJJHdFtPIYWecgm6NO6F3VD');

$payment = new PayMent($config);


// $response = $payment->pay([
//     "payment_type" => "cstore",
//     "transaction_details" => [
//         "order_id" => "INV-".strtoupper(uniqid()),
//         "gross_amount" => 44000,
//     ],
//     "cstore" => [
//         'store' => 'alfamart',
//     ],
  
//     'customer_details' => [
//         'first_name' => "Dadan Efendi",
//         'last_name' => "Indrayan",
//         "email" => 'dadan@gmail.com',
//     ]
   
// ]);
// $response = $payment->pay([
//     "payment_type" => "bank_transfer",
//     "transaction_details" => [
//         "order_id" => "INV-".strtoupper(uniqid()),
//         "gross_amount" => 44000,
//     ],
//     "bank_transfer" => [
//         'bank' => 'bca',
//     ],
  
//     'customer_details' => [
//         'first_name' => "Dadan Efendi",
//         'last_name' => "Indrayan",
//         "email" => 'dadan@gmail.com',
//     ]
   
// ]);

$response = $payment->cekStatus('dbe3c3ea-24ff-4eb4-adb8-163428a3fa41');
var_dump($response);
header('content-type:application/json');
<?php

include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/products/ToyProduct.php';
include_once __DIR__ . '/models/customers/Customer.php';
include_once __DIR__ . '/models/shipping/Address.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';
include_once __DIR__ . '/models/shopping/Order.php';


$food_product = new FoodProduct('Happy Dog', 'Cibo secco', 'cane', 5, ['carne', 'piselli', 'carote'], '31-01-2023');
$toy_product = new ToyProduct('Palla', 'Pallina da tennis', 'cane', 5, 'giallo', ['gomma', 'feltro']);

$unregistered_customer = new Customer();

$address = new Address('Valeria', 'Caria', 'via Masaniello 23', '09121', 'Cagliari', 'Italia');

$credit_card = new CreditCard('23454653', 'mastercard', '23-09-2025');

$order = new Order($address, $credit_card, [$food_product, $toy_product], 20);


// var_dump($food_product);
// var_dump($toy_product);

// var_dump($unregistered_customer);

// var_dump($address);

// var_dump($credit_card);

// var_dump($credit_card->isExpired());

// var_dump($order);


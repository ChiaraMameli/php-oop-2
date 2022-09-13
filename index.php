<?php

include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/products/ToyProduct.php';
include_once __DIR__ . '/models/customers/Customer.php';

$food_product = new FoodProduct('Happy Dog', 'Cibo secco', 'cane', 5, ['carne', 'piselli', 'carote'], '31-01-2023');
$toy_product = new ToyProduct('Palla', 'Pallina da tennis', 'cane', 5, 'giallo', ['gomma', 'feltro']);

$unregistered_customer = new Customer();
$unregistered_customer->addToCart($food_product);

var_dump($food_product);
var_dump($toy_product);

var_dump($unregistered_customer);
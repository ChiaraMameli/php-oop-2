<?php

include_once __DIR__ . '/models/Product.php';

$product_1 = new Product('pallina', 'palla da tennis', 'giochi', 2, 1234);
$product_2 = new Product('crocchette', 'crocchette di pollo - 250g', 'cibo', 4, 1235);
$product_3 = new Product('cuccia', 'cuccia nera 200cm x 300cm', 'accessori', 15, 1236);

var_dump($product_1);
var_dump($product_2);
var_dump($product_3);

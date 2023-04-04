<?php

require_once "data/Product.php";



$product = new Product("Apple", 30000);


echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;


$dummy = new ProductDUmmy("Dummy", 1000);
$dummy->info();

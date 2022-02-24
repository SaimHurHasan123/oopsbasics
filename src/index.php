<?php

use App\Cart;
use App\Product;

require("vendor/autoload.php");

$cart=new Cart();

$product1=new Product(101,"A",100);
$product2=new Product(102,"B",101);
$product3=new Product(103,"C",102);
$product4=new Product(104,"D",150);


$cart->addToCart($product1);
$cart->addToCart($product2);
$cart->addToCart($product3);
$cart->addToCart($product4);
$cart->addToCart($product3);
$cart->addToCart($product4);


echo "<pre>";
print_r($cart->getCart());
echo "</pre";
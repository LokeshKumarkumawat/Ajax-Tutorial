<?php 
require 'Product/India/Laptop.php';
require 'Product/Nepal/Laptop.php';

echo Product\India\NUM;
Product\India\disp();
$obj = new Product\India\Laptop;

echo Product\Nepal\NUM;
Product\Nepal\disp();
$obj = new Product\Nepal\Laptop;
?>
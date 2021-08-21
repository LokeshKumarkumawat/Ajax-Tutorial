<?php 
// Here use Operator won't work as it should be
// This Program wont Run

require 'Product/Laptop.php';
require 'Product/India/Laptop.php';
require 'Product/Nepal/Laptop.php';

// echo Product\India\NUM;
// Product\India\disp();
// $obj = new Product\India\Laptop;

// echo Product\Nepal\NUM;
// Product\Nepal\disp();
// $obj = new Product\Nepal\Laptop;

// echo Product\NUM;
// Product\disp();
// $obj = new Product\Laptop;

// Here use Operator won't work as it should be
// Solution we have to alias const, function, class

use const Product\India\NUM;
use function Product\India\disp;
use Product\India\Laptop;

use const Product\Nepal\NUM;
use function Product\Nepal\disp;
use Product\Nepal\Laptop;

use const Product\NUM;
use function Product\disp;
use Product\Laptop;

echo NUM;
disp();
$obj = new Laptop;

echo NUM;
disp();
$obj = new Laptop;

echo NUM;
disp();
$obj = new Laptop;

?>
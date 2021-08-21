<?php 
require 'Product/Laptop.php';
require 'Product/India/Laptop.php';
require 'Product/Nepal/Laptop.php';

// Product\India
use const Product\India\NUM as IN;
use function Product\India\disp as id;
use Product\India\Laptop as Ila;

// Product\Nepal
use const Product\Nepal\NUM as NN;
use function Product\Nepal\disp as nd;
use Product\Nepal\Laptop as Nla;

// Product
use const Product\NUM as PN;
use function Product\disp as pd;
use Product\Laptop as Pla;

// Product\India
echo IN;
id();
$obj = new Ila;

// Product\Nepal
echo NN;
nd();
$obj = new Nla;

// Product
echo PN;
pd();
$obj = new Pla;

?>
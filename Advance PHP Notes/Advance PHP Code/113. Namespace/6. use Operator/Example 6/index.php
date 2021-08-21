<?php 
require 'Laptop.php';

use const Product\{MIN as MI, MAX, AVG as AV};  // One Line
// use const Product\MIN as MI;
// use const Product\MAX;
// use const Product\AVG as AV;

use function Product\{disp, check as ch};  // One Line
// use function Product\disp;
// use function Product\check as ch;

use Product\{Laptop as La, Dell};   // One Line
// use Product\Laptop as La;
// use Product\Dell;

echo MI;
echo MAX;
echo AV;
disp();
ch();
$obj1 = new La;
$obj2 = new Dell;

?>
<?php 
require 'Laptop.php';

use const Product\{MIN, MAX, AVG};  // One Line
// use const Product\MIN;
// use const Product\MAX;
// use const Product\AVG;

use function Product\{disp, check};  // One Line
// use function Product\disp;
// use function Product\check;

use Product\{Laptop, Dell};   // One Line
// use Product\Laptop;
// use Product\Dell;

echo MIN;
echo MAX;
echo AVG;
disp();
check();
$obj1 = new Laptop;
$obj2 = new Dell;

?>
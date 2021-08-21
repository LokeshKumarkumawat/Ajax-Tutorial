<?php
  namespace Product1;
  const NUM = 10;
  class Laptop {
    function __construct(){
      echo "<h1>Product1 Namespace - Laptop Class </h1>";
    }
  }
  function disp(){
    echo "<h1>Product1 Namespace - disp Function</h1>";
  }

  namespace Product2;
  const NUM = 20;
  class Laptop {
    function __construct(){
      echo "<h1>Product2 Namespace - Laptop Class </h1>";
    }
  }
  function disp(){
    echo "<h1>Product2 Namespace - disp Function</h1>";
  }

  // Remeber Below Code is still inside namespace Product2
  // It will show error without global scope \
  //echo Product1\NUM;
  //Product1\disp();
  //$obj = new Product1\Laptop;

  // When we use global scope it looks for root namespace
  // using global scope \
  echo \Product1\NUM;
  \Product1\disp();
  $obj = new \Product1\Laptop;

  // As we are inside Product2 Namespace so do not
  // need to specify namespace Product2
  echo NUM;
  disp();
  $obj = new Laptop;

   // Remeber Below Code is still inside namespace Product2
  // It will show error without global scope \ or
  // do not mention namespace path
  //echo Product2\NUM;
  //Product2\disp();
  //$obj = new Product2\Laptop;

  // using global scope \
  echo \Product2\NUM;
  \Product2\disp();
  $obj = new \Product2\Laptop;


?>
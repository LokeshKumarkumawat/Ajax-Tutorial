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
  echo NUM;
  disp();
  $obj = new Laptop;

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

  echo NUM;
  disp();
  $obj = new Laptop;


?>
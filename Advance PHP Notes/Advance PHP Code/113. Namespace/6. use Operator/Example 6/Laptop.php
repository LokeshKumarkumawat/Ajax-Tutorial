<?php
  namespace Product;
  // Constants
  const MIN = 10;
  const MAX = 30;
  const AVG = 20;

  // Classes
  class Laptop {
    function __construct(){
      echo "<h1>Product Namespace - Laptop Class </h1>";
    }
  }
  class Dell {
    function __construct(){
      echo "<h1>Product Namespace - Dell Class </h1>";
    }
  }
  
  // Functions
  function disp(){
    echo "<h1>Product Namespace - disp Function</h1>";
  }
  function check(){
    echo "<h1>Product Namespace - check Function</h1>";
  }

?>
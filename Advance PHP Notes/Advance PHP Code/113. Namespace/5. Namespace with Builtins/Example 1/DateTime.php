<?php
 // We can't Create DateTime Class becoz
 // PHP has already a class named DateTime
 // It Will show Error
  class DateTime {
    function __construct(){
      echo "<h1>Apna DateTime Class </h1>";
    }
  }
  $obj = new DateTime();
  print_r($obj);
?>
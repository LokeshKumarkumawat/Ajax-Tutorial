<?php
  namespace Zone;
  class DateTime {
    function __construct(){
      echo "<h1>Apna DateTime Class </h1>";
    }
  }
  $myobj = new DateTime();
  print_r($myobj);
  
  // We are inside Zone namespace now if we need Builtin
  // DateTime Class Object then use Global Scope 
  // We can use builtin DateTime Class
  $dtobj = new \DateTime();
  print_r($dtobj);

?>
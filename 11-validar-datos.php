<?php

  $is_float = filter_var("No es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
  $is_float = filter_var("3.14", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

  $is_int = filter_var("esto no es numero", FILTER_VALIDATE_INT);
  $is_int = filter_var(5, FILTER_VALIDATE_INT);

  $is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);
  $is_ip = filter_var("192.168.0.1", FILTER_VALIDATE_IP);

  $is_url = filter_var("platzi.com", FILTER_VALIDATE_URL);
  $is_url = filter_var("http://platzi.com", FILTER_VALIDATE_URL);

  $is_email = filter_var("pepito@platzi@.com", FILTER_VALIDATE_EMAIL);
  $is_email = filter_var("pepito@platzi.com", FILTER_VALIDATE_EMAIL);

  var_dump($is_float);
  echo "<br>";
  var_dump($is_int);
  echo "<br>"; 
  var_dump($is_ip);
  echo "<br>"; 
  var_dump($is_url);
  echo "<br>"; 
  var_dump($is_email);
?>
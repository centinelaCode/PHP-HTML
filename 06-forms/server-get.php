<?php

  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";

  echo 'Variable global $_GET';
  echo "</br>";
  echo "---------------------------------------";
  echo "</br>";

  $nombre = $_GET["nombre"];
  $edad = $_GET["edad"];

  echo "El usuario $nombre tiene $edad años.";
?>
<?php

  /*
    array(1) {
      ["image"]=>
      array(5) {
        ["name"]      => string(8) "cat1.jpg"
        ["type"]      => string(10) "image/jpeg"
        ["tmp_name"]  => string(14) "/tmp/phpMrUCMq"
        ["error"]     => int(0)
        ["size"]      => int(183598)
      }
    }
  
  */

  // echo "<pre>";
  // var_dump($_FILES);
  // echo "</pre>";

  $basename = $_FILES["image"]["name"];
  $image = $_FILES["image"]["tmp_name"];
  $path_up = "images/$basename";

  // mueve la imagen del directorio temporal al directorio deseado
  move_uploaded_file($image, $path_up);


  // echo $basename;

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <img src="<?= $path_up ?>" alt="" width="300">
  </body>
  </html>
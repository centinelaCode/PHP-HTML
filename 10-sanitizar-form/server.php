<?php

  // var_dump(isset($_POST["nombre"]));

  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";

  $name = $_POST["nombre"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $age = $_POST["age"];

  $htmlentities_name = htmlentities($name);
  $addslashes_username = addslashes($username);

  $onlywords_username = preg_replace("/\d/", "", $username);
  $onlynumbers_username = preg_replace("/\D/", "", $username);

  $email_ok = filter_var($email, FILTER_SANITIZE_EMAIL);
  $sanitiza_numbers = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


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
  <p>Name: <?= $htmlentities_name ?> </p>
  <p>Username: <b><?= $addslashes_username ?></b> (se escapan caracters)</p>
  <p>Username: <b><?= $onlywords_username ?></b> (solo letras)</p>
  <p>Username: <b><?= $onlynumbers_username ?></b> (solo numeros)</p>
  <p>Email: <?= $email_ok ?>  (se filtra el emal)</p>
  <p>Age: <?= $sanitiza_numbers ?> (se sanitizar numers, quita decimales pero los concatena) </p>
  
</body>
</html>
<?php

  $users = array(
    array(
      "id" => 0,
      "userName" => "Mr Michi"
    ),
    array(
      "id" => 1,
      "userName" => "Retax"
    ),
    array(
      "id" => 2,
      "userName" => "Pancho"
    )
  );

  $edad_de_pepito = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasar variables de PHP a Javascript</title>
</head>
<body>



  <script>

    let users = JSON.parse('<?= json_encode($users) ?>');
    console.table(users)

    let edadDePepito = <?= $edad_de_pepito ?>

  </script>
</body>
</html>
<?php
  $bandera = false;
  $isLogin = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>
<body>
  
<!-- forma que s epodria hacer -->
  <?php if($bandera) { ?>
    <h2>Bandera en true</h2>
  <?php } else { ?>
    <h2>Bandera en false</h2>
  <?php }?>

  <br><br><br>

  <!-- Forma recomendada -->
  <?php if($isLogin): ?>
    <h2>Ingresaste al sistema correctamente</h2>
  <?php else: ?>
    <h2>Necesitas Iniciar sesión</h2>
  <?php endif; ?>
    

</body>
</html>
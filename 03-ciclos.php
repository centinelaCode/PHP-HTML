<?php

  $users = ["Mr. Michi", "RataxMaster", "JuanDaman", "Fredier"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>
<body>

  <ul>
    <?php for($x = 0; $x < 10; $x++): ?>
      <li><?= $x ?><span> | <?= $users[$x] ?></span></li>
    <?php endfor; ?>
  </ul>

  <?php while(false): ?>
    <li>Cualquier cosas</li>
  <?php endwhile; ?>

  <h1>Lista de users</h1>
  <ul>
    <?php foreach($users as $userName): ?>

      <li> <?php echo $userName ?> </li>
    
    <?php endforeach; ?>
  </ul>
  
</body>
</html>
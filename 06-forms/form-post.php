<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario | POST</title>
</head>
<body>
  
  <form action="server-post.php" method="POST">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <!-- <br> -->

    <label for="edad">Edad</label>
    <input type="text" name="edad" id="edad">

    <button type="submit">Mandar Formualrio</button>

  </form>

</body>
</html>
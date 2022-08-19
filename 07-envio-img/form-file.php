<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio de imagenes</title>
</head>
<body>
  
  <form action="server.php" method="POST" enctype="multipart/form-data">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <br>
    <br>

    <label for="image">Imagen:</label>
    <input type="file" name="image" id="image">
    
    <button type="submit">Mandar Formualrio</button>

  </form>

</body>
</html>
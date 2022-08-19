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
    
    <!-- Imput simple -->
    <!-- <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"> -->
    <!-- <br><br> -->


    <!-- input Array -->
    <!-- <label>Personas:</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <br><br> -->


    <!-- Arreglos asociativos -->
    <!-- <label>Nombre:</label>
    <input type="text" name="persona[nombre]">    
    <label>Email:</label>
    <input type="text" name="persona[email]">
    <label>Edad:</label>
    <input type="text" name="persona[edad]"> -->


    <!-- Checkbox -->
    <!-- <input type="checkbox" name="list1" >  
    <input type="checkbox" name="list2" value="click en list2">
    <input type="checkbox" name="list3" > -->

    <!-- Radious -->
    <!-- <label for="mexico">México</label>
    <input type="radio" name="pais" value="Mexico" id="mexico">  
    <label for="mexico">Colombia</label>
    <input type="radio" name="pais" value="Colombia" id="colombia"> 
    <label for="mexico">Peru</label>
    <input type="radio" name="pais" value="Peru" id="peru">  -->


    <!-- Multiples Archivos -->
    <label for="galeria">Carga tus imagenes:</label>
    <input type="file" multiple name="galeria[]" id="galeria">


    <button type="submit">Mandar Formualrio</button>
    
  </form>

</body>
</html>
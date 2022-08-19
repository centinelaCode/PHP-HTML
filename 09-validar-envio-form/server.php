<?php

  // var_dump(isset($_POST["nombre"]));
  /*
    isset -> retorna false si no esta definido (puede ser que no se especifique el name)
          -> retorna true si esta definido (si se especifica el name en el input)

  */

  // var_dump(empty($_POST["nombre"]));
  /*
    empty -> retorna true si se manda vacio (un string vacio se considera que no se envio nada)
          -> retorna false si se mando algo en el formulario  
          
  */
  // die();

  // validación por inputs
  // if ( isset($_POST["nombre"]) && !empty($_POST["nombre"]) ) {
  //   echo "!Hola " . $_POST['nombre'] . "!!!!";
  // } else {
  //   echo "No mandste nada!!!";
  // }


  // var_dump($_POST["form"]);
  // die();

  // validacion en el formulario
  if( isset($_POST["form"]) ) {
    echo "Todo el form fue mandado";
  } else {
    echo "No se envio el form";
  }
  

<?php
require 'conexion.php';
  require 'navdi.php';



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="nuevo_pedido">
      <h1>Ingrese Nueva ejecusion de mejora argentina</h1>
<div class="contenedor-inputs">
      <form class="form_order" action="envio.php" method="post">

        <input type="text" name="tipo" placeholder="tipo" required  />
        <input type="text" name="dd" placeholder="descripsion corta" required  />

        <textarea name="explicasion" rows="8" cols="80" placeholder="explicasion"></textarea>

        <input class="button" type="submit" value="Enviar">
      </form>
    </div>

    </div>
  </body>
</html>

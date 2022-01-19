<?php

try {

   $conexion=mysqli_connect('localhost','root','','dipu');

}
catch (Exception $e)
{
   echo $e->getMessage(); //Me muestra un mensaje si no se pudo conectar a la db.
}

?>

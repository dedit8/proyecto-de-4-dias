<?php require 'conexion.php';
  require 'navbar.php';
//recibimos los datos de regis1
  $tipo    = $_POST["tipo"];
  $dd  = $_POST["dd"];
  $explicasion      = $_POST["explicasion"];


//insertamos los datos obtenidos
$inserto = "INSERT INTO propus (tipo, dd, explicasion)
                      VALUES ('$tipo','$dd','$explicasion')";


//ejecutamos la acción inserto



  $resultado = mysqli_query($conexion, $inserto);
  if (!$resultado) {
    echo "error al solisitar";
  }else {
    echo '<script type="text/javascript">
    alert("Se agregó solisitud correctamente");
    window.location.href="lfet.php";
    </script>';
  }
  mysqli_close($conexion);

  ?>

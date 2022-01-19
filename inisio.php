
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/ventana.css">
    <script src="https://kit.fontawesome.com/5ad54e1f93.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php include('index.php')?>

    <div class="overlay" id='overlay'>
      <div class="cuerpo_forms">
          <div class="form_head">
            <h1>Inicio de Sesión</h1>
          </div>
          <div class="contenedor-inputs">
            <form class="form_order" action="login.php" method="post">
              <input class="entrada" type="number" name="dni" placeholder="Dni" required  />
              <input class="entrada" type="number" name="cuit" placeholder="cuit" required  />
              <input type="submit" class="button-modal" value="Enviar">
            </form>
          </div>
      </div>
    </div>
    <script src="js/popups.js"></script>
  </body>
</html>

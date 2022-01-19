<?php
require  "1a.php";
require  "navdi.php";
$conexion=mysqli_connect('localhost','root','','dipu');
$query = "SELECT * FROM propus";
$result = mysqli_query($conexion, $query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<style media="screen">
table, th, td {

border:1px solid black;
}
</style>

  </head>
  <body>
    <div class="cuerpoPedidos">
      <div class="pedidosUsuarios">
        <h1>Pedidos de los Usuarios</h1>
        <div>
          <table id="id_ped" style="width:100%">>
            <thead>
              <tr>
                <th>tipo</th>
                <th>breve explicasion</th>
                <th>explicasion</th>

                <th></th>
              </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result))
            {
              echo "
              <tr>
                <td>" .$row["tipo"]." </td>
                  <td>" .$row["dd"]." </td>
                  <td> ".$row["explicasion"]." </td>
              </tr>
              ";
            }
             ?>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
    $(document).on( function () {
      var table =  $('#id_ped2').DataTable({
                    "ajax":{
                      "method":"POST",
                      "url":"vot.php"
                    },
                    "columns":[
                      {"data":"tipo"},
                      {"data":"dd"},
                      {"data":"explicasion"}

                    ],
                  }})



    </script>
  </body>
</html>

<?php
require_once("header.php");
require_once("dbutils.php");

$con = conectarDB();

$aHormigas = buscarTodasHormigas($con);
//var_export($aHormigas);


?>



<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js" ></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js" ></script>
  </head>
  <body>
    <div class="container" style="margin-top:50px">
<table id="mi_id_table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ALIAS</th>
                <th>TIPO</th>
                <th>EDAD</th>
            </tr>
        </thead>
        <tbody>
          <?php
          foreach ($aHormigas as $fila_hormiga)
          {
            echo "<tr>";
              echo "<td>".$fila_hormiga['ALIAS']."</td>";
              echo "<td>".$fila_hormiga['TIPO']."</td>";
              echo "<td>".$fila_hormiga['EDAD']."</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ALIAS</th>
                <th>TIPO</th>
                <th>EDAD</th>
            </tr>
        </tfoot>
    </table>
    </div>
  </body>

  <script>
  new DataTable('#mi_id_table');
  </script>
  
</html>
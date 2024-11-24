<?php
session_start();
var_export($_POST);
require_once('dbutils.php');
$res=true;
if (isset($_POST['usuario']) && isset($_POST['password']))
{
  $conexion = conectarDB();
  $res = existeUsuario($conexion, $_POST['usuario'], $_POST['password']);
  if ($res)
  {
    $_SESSION['userApp']=$_POST['usuario'];
    header("Location:admin1.php");
    exit();
  }

}
?>


<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" style="margin-top:50px">
      <form action="index.php" method="POST">
        <div>
           <input style="margin:10px" type="text" name="usuario" class="form-control" required/> 
            <input style="margin:10px" type="password" name="password" class="form-control" required/> 
        </div>
        <div>
          <button style="margin:10px" class="btn btn-primary">Login</button>
        </div>       
        <div>
          <?php
            if (!$res)
            {
              echo "<p style='margin:10px;color:red'>CONTRASEÑA INCORRECTA</p> ";
            }
          ?>
        </div>       
      </form> 
    </div>
  </body>
</html>
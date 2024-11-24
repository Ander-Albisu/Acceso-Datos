<?php
session_start();
if (!$_SESSION['userApp'])
{
  header("Location:index.php");
  exit();
}

$minExpiracion=100;

if (isset($_SESSION['momentoUltimoClick']))
{
  $segundosInactivo = time() -   $_SESSION['momentoUltimoClick'];
  if ($segundosInactivo > $minExpiracion*60)
  {
    session_destroy();
    header("Location:index.php");
    exit();
  }
}


$_SESSION['momentoUltimoClick'] = time();



?>
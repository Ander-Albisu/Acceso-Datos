<?php

function conectarDB()
{
  try
  {
    $cadenaConexion ="mysql:host=localhost;dbname=DB_HORMIGUERO";
    $usu = "root";
    $passW = "";

    $db = new PDO ($cadenaConexion,$usu,$passW);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  catch (PDOException $ex)
  {
    echo "Hay error conectando ".$ex->getMessage();
  }
}

function existeUsuario($con, $nombre, $pass)
{
  try
  {
    $query = "SELECT * FROM USUARIOS WHERE NOMBRE=:USU AND PASSWORD=:PASS";
    $argumentos = array(":USU"=>$nombre,":PASS"=>md5($pass));
    $stm = $con->prepare($query);
    $stm->execute($argumentos);      
    return $stm->fetchAll();
  }
  catch (PDOException $e)
  {
     echo " Error en buscarObreras ".$e->getMessage();
  }
  
}

function buscarTodasHormigas($con)
{
  $vectorFilas= array();
  try
  {
    $query = "SELECT * FROM HORMIGAS";
    $sth = $con->prepare($query);
    $sth->execute();
    while($fila = $sth->fetch())
    {
      $vectorFilas[] = $fila;
    }
  }
  catch (PDOException $ex)
  {
    echo " Error en buscarAlias ".$ex->getMessage();
  }
  return $vectorFilas;
}

?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room de Ander</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenidos al Escape Room de Ander</h1>
    <p>Tu misión es descifrar todos los candados y escapar de la habitación final.</p>
    <form action="game.php" method="post">
        <button type="submit">Comenzar</button>
    </form>
</body>
</html>

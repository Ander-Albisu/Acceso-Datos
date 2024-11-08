<?php
session_start();
if ($_SESSION['habitacion'] != 5) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 5
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Felicidades! - Escape Room</title>
</head>
<body>
    <h2>¡Felicidades! Has Escapado del Escape Room.</h2>
    <p>Has resuelto todos los candados y completado el Escape Room con éxito. ¡Enhorabuena!</p>
    <form action="habitacion0.php" method="post">
        <button type="submit">Volver a jugar</button>
    </form>
</body>
</html>

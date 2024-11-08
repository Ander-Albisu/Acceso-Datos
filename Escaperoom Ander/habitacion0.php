<?php
session_start();
if (!isset($_SESSION['habitacion'])) {
    $_SESSION['habitacion'] = 0;  // Comienza en la habitación 0
    $_SESSION['intentosC5'] = 0;  // Intentos para C5
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 0 - Escape Room</title>
</head>
<body>
    <h2>Habitación 0: ¡Bienvenido al Escape Room!</h2>
    <p>Estás en la habitación de inicio. Para avanzar, necesitas encontrar pistas sobre el candado C1.</p>
    <form action="habitacion1.php" method="post">
        <button type="submit">Avanzar a la habitación 1</button>
    </form>
</body>
</html>

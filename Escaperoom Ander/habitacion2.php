<?php
session_start();
if ($_SESSION['habitacion'] != 1) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 1
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 2 - Escape Room</title>
</head>
<body>
    <h2>Habitación 2: Más Pistas para el Candado C1</h2>
    <p>Has encontrado más pistas. La combinación tiene un patrón específico.</p>
    <p>Pista 2: La combinación es de números consecutivos.</p>
    <form action="game.php" method="post">
        <label for="candado">Candado (C1): </label>
        <input type="text" name="candado" value="C1" readonly>
        <label for="clave">Clave: </label>
        <input type="text" name="clave" required>
        <button type="submit">Desbloquear C1</button>
    </form>
    <form action="habitacion3.php" method="post">
        <button type="submit">Avanzar a la habitación 3</button>
    </form>
</body>
</html>

<?php
session_start();
if ($_SESSION['habitacion'] != 4) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 4
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 5 - Escape Room</title>
</head>
<body>
    <h2>Habitación 5: Pistas para el Candado C3</h2>
    <p>Estás cerca de la última fase. Resuelve este candado y llegarás al final.</p>
    <p>Pista 5: La combinación es de números elevados a una potencia.</p>
    <form action="game.php" method="post">
        <label for="candado">Candado (C3): </label>
        <input type="text" name="candado" value="C3" readonly>
        <label for="clave">Clave: </label>
        <input type="text" name="clave" required>
        <button type="submit">Desbloquear C3</button>
    </form>
    <form action="habitacion6.php" method="post">
        <button type="submit">Avanzar a la habitación 6</button>
    </form>
</body>
</html>

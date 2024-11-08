<?php
session_start();
if ($_SESSION['habitacion'] != 3) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 3
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 4 - Escape Room</title>
</head>
<body>
    <h2>Habitación 4: Pistas para el Candado C4</h2>
    <p>Has encontrado pistas importantes para resolver el candado C4.</p>
    <p>Pista 4: La combinación de este candado es una secuencia de números bajos.</p>
    <form action="game.php" method="post">
        <label for="candado">Candado (C4): </label>
        <input type="text" name="candado" value="C4" readonly>
        <label for="clave">Clave: </label>
        <input type="text" name="clave" required>
        <button type="submit">Desbloquear C4</button>
    </form>
    <form action="habitacion5.php" method="post">
        <button type="submit">Avanzar a la habitación 5</button>
    </form>
</body>
</html>

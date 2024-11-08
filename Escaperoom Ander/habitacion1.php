<?php
session_start();
if ($_SESSION['habitacion'] != 0) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 0
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 1 - Escape Room</title>
</head>
<body>
    <h2>Habitación 1: Pistas para el Candado C1</h2>
    <p>Has encontrado algunas pistas que te ayudarán a resolver el candado C1.</p>
    <p>Pista 1: La combinación está formada por 3 números secuenciales.</p>
    <form action="game.php" method="post">
        <label for="candado">Candado (C1): </label>
        <input type="text" name="candado" value="C1" readonly>
        <label for="clave">Clave: </label>
        <input type="text" name="clave" required>
        <button type="submit">Desbloquear C1</button>
    </form>
    <form action="habitacion2.php" method="post">
        <button type="submit">Avanzar a la habitación 2</button>
    </form>
</body>
</html>

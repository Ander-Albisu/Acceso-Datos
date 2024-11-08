<?php
session_start();
if ($_SESSION['habitacion'] != 2) {
    header('Location: habitacion0.php');  // Asegurarse de que solo se acceda a esta habitación después de la habitación 2
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 3 - Escape Room</title>
</head>
<body>
    <h2>Habitación 3: Pistas para el Candado C2</h2>
    <p>Has encontrado nuevas pistas para resolver el siguiente candado: C2.</p>
    <p>Pista 3: El candado C2 está basado en una secuencia de números en orden ascendente.</p>
    <form action="game.php" method="post">
        <label for="candado">Candado (C2): </label>
        <input type="text" name="candado" value="C2" readonly>
        <label for="clave">Clave: </label>
        <input type="text" name="clave" required>
        <button type="submit">Desbloquear C2</button>
    </form>
    <form action="habitacion4.php" method="post">
        <button type="submit">Avanzar a la habitación 4</button>
    </form>
</body>
</html>

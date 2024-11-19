<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <?php
    if(isset($_POST['submit'])){
        // Conexión a la base de datos (reemplaza con tus credenciales)
        include 'conexion.php';

        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];

        // Consultar la base de datos para verificar el usuario y la contraseña
        $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Contraseña correcta, redireccionar a bienvenida.php
                header("Location: bienvenida.php");
                exit();
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Usuario no encontrado.";
        }

        $conn->close();
    }
    ?>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Iniciar sesión">
    </form>
</body>
</html>
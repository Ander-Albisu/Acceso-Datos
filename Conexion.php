<?php
// Datos de conexión a la base de datos (reemplaza con tus datos)
$servername = "localhost";
$username = "tu_usuario";
$password = password_hash("tu_contraseña_segura", PASSWORD_DEFAULT); // Contraseña encriptada
$dbname = "Usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>
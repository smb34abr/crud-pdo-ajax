<?php
/* Variables del servidor */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
    );

    // Establecer el modo de error de PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente";
} catch (PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}

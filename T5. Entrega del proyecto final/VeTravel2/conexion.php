<?php
// Configuración de la conexión a la base de datos
$servername = "sql207.infinityfree.com";
$username = "if0_36784096";
$password = "4b0it3zapyahQtY";
$dbname = "if0_36784096_hotel";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
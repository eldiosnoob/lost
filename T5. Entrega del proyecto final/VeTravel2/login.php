<?php
session_start();

include 'conexion.php';

$correo_electronico = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];

$stmt = $conn->prepare("SELECT correo_electronico, contraseña, nombre FROM usuarios WHERE correo_electronico = ?");
$stmt->bind_param("s", $correo_electronico);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($contraseña, $user['contraseña'])) {
    $_SESSION['nombre'] = $user['nombre'];
    header("Location: index.php");
    exit(); 
} else {
    echo "Correo electrónico o contraseña incorrectos";
}

$stmt->close();
$conn->close();
?>


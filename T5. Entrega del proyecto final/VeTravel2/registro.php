<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$confirmar_contraseña = $_POST['confirmar_contraseña'];

if ($contraseña !== $confirmar_contraseña) {
    die("Las contraseñas no coinciden.");
}

$contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, correo_electronico, telefono, contraseña) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellido, $fecha_nacimiento, $correo_electronico, $telefono, $contraseña_hash);

if ($stmt->execute()) {
    header("Location: login.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

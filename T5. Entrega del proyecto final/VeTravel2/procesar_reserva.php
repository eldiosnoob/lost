<?php
session_start();

include 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$fecha_llegada = $_POST['fecha-llegada'];
$fecha_salida = $_POST['fecha-salida'];
$adultos = $_POST['adultos'];
$ninos = $_POST['ninos'];

$duracion = $_POST['duracion'];
$hotel = $_POST['hotel'];
$transporte = $_POST['transporte'];
$actividades = $_POST['actividades'];
$comidas = $_POST['comidas'];
$precio = $_POST['precio'];

// Calcular precio total
$precio_total = $precio * ($adultos + $ninos);

// Insertar datos en la base de datos
$sql = "INSERT INTO reservas (nombre, correo_electronico, telefono, fecha_llegada, fecha_salida, adultos, ninos, duracion, hotel, transporte, actividades, comidas, precio, precio_total)
        VALUES ('$nombre', '$correo_electronico', '$telefono', '$fecha_llegada', '$fecha_salida', '$adultos', '$ninos', '$duracion', '$hotel', '$transporte', '$actividades', '$comidas', '$precio', '$precio_total')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

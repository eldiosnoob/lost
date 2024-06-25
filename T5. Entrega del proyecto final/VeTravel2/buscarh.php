<?php
include 'conexion.php';

// Recibir y procesar los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$hotel = $_POST['hotel'];
$destino = $_POST['destino'];
$fecha_entrada = $_POST['fecha_entrada'];
$fecha_salida = $_POST['fecha_salida'];
$habitacion = $_POST['habitacion'];
$huespedes = $_POST['huespedes'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO reservas_hotel (nombre, telefono, hotel, destino, fecha_entrada, fecha_salida, habitacion, huespedes)
        VALUES ('$nombre', '$telefono', '$hotel', '$destino', '$fecha_entrada', '$fecha_salida', '$habitacion', '$huespedes')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "¡Reserva realizada con éxito!";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
<?php

include 'conexion.php';
 // Obtener los datos del formulario
 $origen = $_POST["origen"];
 $destino = $_POST["destino"];
 $fecha = $_POST["fecha"];
 $pasajeros = $_POST["pasajeros"];
 $correo = $_POST["correo"];
 $telefono = $_POST["telefono"];

 // Prepara la consulta SQL para la inserción de datos
 $sql = "INSERT INTO vuelos (origen, destino, fecha, pasajeros, correo, telefono)
 VALUES ('$origen', '$destino', '$fecha', $pasajeros, '$correo', '$telefono')";

 if ($conn->query($sql) === TRUE) {
     echo "Registro insertado correctamente";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

 // Cierra la conexión
 $conn->close();
?>
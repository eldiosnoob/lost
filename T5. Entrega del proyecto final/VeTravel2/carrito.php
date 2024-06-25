<!DOCTYPE html>
<html>
  <head>
    <title>VeTravel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
    <style>
      .slider {
          width: 100%;
          overflow: hidden;
          position: relative;
          text-align: center; /* Centro las imágenes */
      }

      .slide {
          display: none; /* Oculta las imágenes por defecto */
          width: 100%; /* O el ancho deseado para cada imagen */
      }

      .slide img {
          width: 100%;
          height: 500px; /* Ajusta la altura según sea necesario */
          object-fit: cover; /* Asegura que las imágenes cubran el contenedor */
      }

      .btn-prev,
      .btn-next {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          cursor: pointer;
          background-color: rgba(141, 33, 78, 0.5);
          color: white;
          padding: 10px;
          z-index: 1;
      }

      .btn-prev {
          left: 0;
      }

      .btn-next {
          right: 0;
      }

      .user-options {
          display: flex;
          gap: 20px;
      }

      .user-options a {
          text-decoration: none;
          color: #000;
          font-size: 16px;
      }

      .user-options i {
          margin-right: 5px;
      }

      nav ul {
          list-style: none;
          padding: 0;
          display: flex;
          gap: 20px;
      }

      nav a {
          text-decoration: none;
          color: #000;
          font-size: 16px;
      }

      nav i {
          margin-right: 5px;
      }

      .user-info {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .user-info .user-name {
            font-size: 0.8em;
            margin-top: 5px;
        }

        .user-info a {
            font-size: 0.8em;
            color: #000;
            text-decoration: none;
            margin-top: 5px;
        }

        .user-info a:hover {
            text-decoration: underline;
        }
    </style>
  </head>
  <body>
    <header>
        <a href="VeTravel.html"><img src="logo.png" width="200px" height="100px"></a>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="destinos.php"><i class="fa fa-map-marker-alt"></i> Destinos</a></li>
                <li><a href="paquetes.php"><i class="fa fa-suitcase"></i> Paquetes</a></li>
                <li><a href="vuelos.php"><i class="fa fa-plane"></i> Vuelos</a></li>
                <li><a href="hoteles.php"><i class="fa fa-hotel"></i> Hoteles</a></li>
            </ul>
        </nav>
        <div class="user-options">
            <?php session_start(); ?>
            <?php if(isset($_SESSION['nombre'])): ?>
                <div class="user-info">
                    <i class="fa-solid fa-user"></i>
                    <span class="user-name"><?php echo $_SESSION['nombre']; ?></span>
                    <a href="logout.php">Cerrar sesión</a>
                </div>
            <?php else: ?>
                <a href="login.html"><i class="fa-solid fa-user"></i></a>
            <?php endif; ?>
            <a href="carrito.html"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </header>


    <div class="carrito">
        <h2>Carrito de Compras</h2>
        <?php
        
        include 'conexion.php';

        
        $sql_vuelo = "SELECT * FROM vuelos";
        $result_vuelo = $conn->query($sql_vuelo);

        
        if ($result_vuelo !== false && $result_vuelo->num_rows > 0) {
            while($row_vuelo = $result_vuelo->fetch_assoc()) {
                ?>
                <div class="reserva">
                    <h3>Reserva de Vuelo</h3>
                    <p>Origen: <?php echo $row_vuelo['origen']; ?></p>
                    <p>Destino: <?php echo $row_vuelo['destino']; ?></p>
                    <p>Fecha: <?php echo $row_vuelo['fecha']; ?></p>
                    <p>Pasajeros: <?php echo $row_vuelo['pasajeros']; ?></p>
                    <p>Correo: <?php echo $row_vuelo['correo']; ?></p>
                    <p>Teléfono: <?php echo $row_vuelo['telefono']; ?></p>
                </div>
                <?php
            }
        } else {
            echo "No hay reservas de vuelo encontradas";
        }

        
        $sql_paquete = "SELECT * FROM reservas_paquete";
        $result_paquete = $conn->query($sql_paquete);

        
        $sql_paquete = "SELECT * FROM reservas";
        $result_paquete = $conn->query($sql_paquete);

        
        if ($result_paquete !== false && $result_paquete->num_rows > 0) {
            while($row_paquete = $result_paquete->fetch_assoc()) {
                ?>
                <div class="reserva">
                    <h3>Reserva de Paquete Turístico</h3>
                    <p>Nombre: <?php echo $row_paquete['nombre']; ?></p>
                    <p>Correo Electrónico: <?php echo $row_paquete['correo_electronico']; ?></p>
                    <p>Teléfono: <?php echo $row_paquete['telefono']; ?></p>
                    <p>Fecha de Llegada: <?php echo $row_paquete['fecha_llegada']; ?></p>
                    <p>Fecha de Salida: <?php echo $row_paquete['fecha_salida']; ?></p>
                    <p>Adultos: <?php echo $row_paquete['adultos']; ?></p>
                    <p>Niños: <?php echo $row_paquete['ninos']; ?></p>
                    <p>Hotel: <?php echo $row_paquete['hotel']; ?></p>
                    <p>Transporte: <?php echo $row_paquete['transporte']; ?></p>
                    <p>Actividades: <?php echo $row_paquete['actividades']; ?></p>
                </div>
                <?php
            }
        } else {
            echo "No hay reservas de paquete turístico encontradas";
        }

        
        $sql_hotel = "SELECT * FROM reservas_hotel";
        $result_hotel = $conn->query($sql_hotel);

        
        if ($result_hotel !== false && $result_hotel->num_rows > 0) {
            while($row_hotel = $result_hotel->fetch_assoc()) {
                ?>
                <div class="reserva">
                    <h3>Reserva de Hotel</h3>
                    <p>Nombre: <?php echo $row_hotel['nombre']; ?></p>
                    <p>Teléfono: <?php echo $row_hotel['telefono']; ?></p>
                    <p>Hotel: <?php echo $row_hotel['hotel']; ?></p>
                    <p>Destino: <?php echo $row_hotel['destino']; ?></p>
                    <p>Fecha de Entrada: <?php echo $row_hotel['fecha_entrada']; ?></p>
                    <p>Fecha de Salida: <?php echo $row_hotel['fecha_salida']; ?></p>
                    <p>Habitación: <?php echo $row_hotel['habitacion']; ?></p>
                    <p>Huéspedes: <?php echo $row_hotel['huespedes']; ?></p>
                </div>
                <?php
            }
        } else {
            echo "No hay reservas de hotel encontradas";
        }

        
        $conn->close();
        ?>
    </div>
    

    <footer>
      <div class="container-footer">
        <div class="row">
          <div class="col1">
            <div class="col">
              <h4>Contacto</h4>
              <p>Teléfono: +52 4446719023</p>
              <p>Email: Ve.Travel@gmail.com</p>
              <p>Dirección: Av. Reforma #123, SLP</p>
            </div>
             
            <div class="col">
              <h4>Redes sociales</h4>
              <ul class="redes-sociales">
                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col1">
            <div class="col">
              <p>&copy; 2024 VeTravel. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>


<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Paquetes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <a href="VeTravel.html"><img src="logo.png" width="200px" height="100px"></a>
      <nav>
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
        <li><a href="destinos.php"><i class="fa-solid fa-map-marked-alt"></i> Destinos</a></li>
        <li><a href="paquetes.php"><i class="fa-solid fa-box"></i> Paquetes</a></li>
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
      <a href="carrito.php"><i class="fa-solid fa-shopping-cart"></i></a>
    </div>
    </header>
    <main>
      <h2 style="text-align: center;">Paquetes de Viajes</h2>
      <div class="container">
        <div class="container2">
          <div class="paquete">
            <img src="imagenes/destino_1.jpg" alt="Paquete 1">
            <div class="descripcion">
              <h3>Paquete de playa en Puerto Vallarta</h3>
              <ul>
                <li>5 días y 4 noches en el hotel Riu Vallarta</li>
                <li>Transporte desde y hacia el aeropuerto incluido</li>
                <li>Excursión de buceo en la bahía de Banderas</li>
                <li>Desayuno y cena buffet incluidos todos los días</li>
              </ul>
              <p class="precio">$11000 por persona</p>
              <a href="paquete_1.php" class="boton">Reservar ahora</a>
            </div>
          </div>
          <div class="paquete">
            <img src="imagenes/destino_2.jpg" alt="Paquete 2">
            <div class="descripcion">
              <h3>Paquete de aventura en Tulum</h3>
              <ul>
                <li>4 días y 3 noches en una cabaña en la playa</li>
                <li>Transporte desde y hacia el aeropuerto incluido</li>
                <li>Excursión en bicicleta por la zona arqueológica de Tulum</li>
                <li>Excursión en kayak por la Laguna de Bacalar</li>
              </ul>
              <p class="precio">$11500 por persona</p>
              <a href="paquete_2.php" class="boton">Reservar ahora</a>
            </div>
          </div>
        </div>
        <div class="container2">
          <div class="paquete">
            <img src="imagenes/destino_3.jpg" alt="Paquete 3">
            <div class="descripcion">
              <h3>Paquete de cultura y playa en Mazatlán</h3>
              <ul>
                <li>6 días y 5 noches en el hotel Pueblo Bonito Mazatlán</li>
                <li>Transporte desde y hacia el aeropuerto incluido</li>
                <li>Tour guiado por el centro histórico de Mazatlán</li>
                <li>Clase de surf en la playa de Olas Altas</li>
              </ul>
              <p class="precio">$18000 por persona</p>
              <a href="paquete_3.php" class="boton">Reservar ahora</a>
            </div>
          </div>
          <div class="paquete">
            <img src="imagenes/destino_4.jpg" alt="Paquete 4">
            <div class="descripcion">
              <h3>Paquete de surf en Sayulita</h3>
              <ul>
                <li>7 días y 6 noches en un bungalow en la playa</li>
                <li>Transporte desde y hacia el aeropuerto incluido</li>
                <li>Clases de surf con instructor profesional</li>
                <li>Cena de bienvenida en un restaurante local</li>
              </ul>
              <p class="precio">$17000 por persona</p>
              <a href="paquete_4.php" class="boton">Reservar ahora</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="container-footer">
        <div class="row">
          <div class="col1">
            <div class="col">
              <h4>Contacto</h4>
              <p>Teléfono: +52 55 1234 5678</p>
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

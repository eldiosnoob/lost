<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Puerto Vallarta</title>
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
      <div class="main-contenedor">
        <div class="paquete-info">
          <h2>Paquete de playa en Puerto Vallarta</h2>
          <p>Disfruta de unas vacaciones inolvidables en Puerto Vallarta, México. Con nuestro paquete de playa, tendrás acceso a todo lo que necesitas para unas vacaciones perfectas: desde alojamiento de lujo hasta transporte desde y hacia el aeropuerto, además de una emocionante excursión de buceo en la bahía de Banderas. Puerto Vallarta es conocido por sus impresionantes playas, la cultura local y la rica gastronomía. </p>
          <p>Nuestro paquete de playa te da la libertad de explorar todo lo que Puerto Vallarta tiene para ofrecer sin preocuparte por los detalles. Ofrecemos alojamiento en el hotel Riu Vallarta, que cuenta con comodidades de primera clase, y te incluimos desayuno y cena buffet todos los días. Además, nuestro equipo de servicio al cliente está disponible las 24 horas del día para ayudarte en lo que necesites.</p>

          <div class="reserva">
  <h2>Reserva ahora</h2>
  <form action="procesar_reserva.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo_electronico">Correo Electronico:</label>
    <input type="email" id="correo_electronico" name="correo_electronico" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>
    
    <input type="hidden" id="duracion" name="duracion" value="5 días y 4 noches">
    <input type="hidden" id="hotel" name="hotel" value="Hotel Riu Vallarta">
    <input type="hidden" id="transporte" name="transporte" value="Transporte incluido desde y hacia el aeropuerto">
    <input type="hidden" id="actividades" name="actividades" value="Excursión de buceo en la bahía de Banderas">
    <input type="hidden" id="comidas" name="comidas" value="Desayuno y cena buffet incluidos todos los días">
    <input type="hidden" id="precio" name="precio" value="11000">

    <table>
      <tr>
        <td><label for="fecha-llegada">Fecha de llegada:</label></td>
        <td><input type="date" id="fecha-llegada" name="fecha-llegada" required></td>
        <td><label for="fecha-salida">Fecha de salida:</label></td>
        <td><input type="date" id="fecha-salida" name="fecha-salida" required></td>
      </tr>
      <tr>
        <td><label for="adultos">Adultos:</label></td>
        <td><input type="number" id="adultos" name="adultos" min="1" max="10" required></td>
        <td><label for="ninos">Niños:</label></td>
        <td><input type="number" id="ninos" name="ninos" min="0" max="10"></td>
      </tr>
    </table>
    <input type="submit" value="Reservar ahora">
  </form>
      </div>
        </div>
          <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14925.925138224176!2d-105.3120796!3d20.7312781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842146d538a0ed8f%3A0x5750e85f00bb0953!2sHotel%20Riu%20Vallarta!5e0!3m2!1ses!2smx!4v1678131356875!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

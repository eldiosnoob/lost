<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Tulum</title>
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
          <h2>Paquete de aventura en Tulum</h2>
          <p>Explora lo mejor de Tulum con nuestro paquete de aventura de 4 días y 3 noches. Te alojarás en una cabaña en la playa, con transporte desde y hacia el aeropuerto incluido. Además, disfrutarás de dos emocionantes excursiones: una en bicicleta por la zona arqueológica de Tulum y otra en kayak por la Laguna de Bacalar.</p>
          <p>Descubre la belleza natural y la historia de esta región mientras te relajas en tu cabaña frente al mar. Nuestro equipo de servicio al cliente está disponible las 24 horas del día para ayudarte en lo que necesites.</p>

          <section class="lugares">
            <table>
                <tbody>
                    <tr>
                        <td><i class="fa-solid fa-clock"></i></td>
                        <td><strong>Duración</strong></td>
                        <td>4 días y 3 noches</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-hotel"></i></td>
                        <td><strong>Hotel</strong></td>
                        <td>Cabaña en la playa</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-plane"></i></td>
                        <td><strong>Transporte</strong></td>
                        <td>Transporte incluido desde y hacia el aeropuerto</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-person-biking"></i></td>
                        <td><strong>Actividades</strong></td>
                        <td>Excursión en bicicleta por la zona arqueológica de Tulum y Excursión en kayak por la Laguna de Bacalar</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-bowl-food"></i></td>
                        <td><strong>Comidas</strong></td>
                        <td>Desayuno y cena incluidos todos los días</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-dollar-sign"></i></td>
                        <td><strong>Precio</strong></td>
                        <td>$15,500</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <td><strong>Nota: </strong></td>
        <td> El precio del paquete es por persona</td>       

        <div class="reserva">
  <h2>Reserva ahora</h2>
  <form action="procesar_reserva.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo_electronico">Correo Electronico:</label>
    <input type="email" id="correo_electronico" name="correo_electronico" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>
    
    <input type="hidden" id="duracion" name="duracion" value="4 días y 3 noches">
    <input type="hidden" id="hotel" name="hotel" value="Cabaña en la playa">
    <input type="hidden" id="transporte" name="transporte" value="Transporte incluido desde y hacia el aeropuerto">
    <input type="hidden" id="actividades" name="actividades" value="Excursión en bicicleta por la zona arqueológica de Tulum y Excursión en kayak por la Laguna de Bacalar">
    <input type="hidden" id="comidas" name="comidas" value="Desayuno y cena incluidos todos los días">
    <input type="hidden" id="precio" name="precio" value="15500">
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11408.560447840342!2d-88.39182019303112!3d18.676518746211848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5bb13e302c19f9%3A0x11cedc7f2bd0e608!2sBacalar%2C%20Q.R.!5e0!3m2!1ses!2smx!4v1679201379400!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

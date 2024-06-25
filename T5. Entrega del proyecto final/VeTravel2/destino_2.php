<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tulum</title>
  <link rel="stylesheet" href="style.css">
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
    <div class="destino-panoramica">
        <img src="imagenes/panoramica-mar.png" alt="">
    </div>          
    <main>
    <div class="main-contenedor">
        <div class="destino-info">
            <h2>Tulum</h2>
            <p>Tulum es un destino turístico popular en la costa caribeña de México, conocido por sus hermosas playas de arena blanca, sus ruinas mayas y su ambiente relajado. Situada en la península de Yucatán, Tulum es una pequeña ciudad costera que ofrece una experiencia auténtica de México, con una vibrante cultura local y una deliciosa gastronomía.</p>
            <p>Las principales atracciones de Tulum incluyen la zona arqueológica de Tulum, una antigua ciudad amurallada de la civilización maya que data del siglo XIII, y la reserva natural de Sian Ka'an, que alberga una gran variedad de flora y fauna silvestre. También hay muchas opciones para practicar deportes acuáticos como el buceo, el snorkel y el paddleboarding.</p>
            
            <section class="lugares">
                <h2>Principales lugares de interés</h2>
                <table>
                <tbody>
                    <tr>
                    <td><strong>Zona arqueológica de Tulum</strong></td>
                    <td>Antigua ciudad amurallada de la civilización maya con impresionantes ruinas arqueológicas.</td>
                    </tr>
                    <tr>
                    <td><strong>Playa Paraíso</strong></td>
                    <td>Playa de arena blanca y aguas cristalinas, ideal para nadar y tomar el sol.</td>
                    </tr>
                    <tr>
                    <td><strong>Gran Cenote</strong></td>
                    <td>Hermoso cenote de agua dulce rodeado de vegetación exuberante.</td>
                    </tr>
                    <tr>
                    <td><strong>Reserva de la biosfera de Sian Ka'an</strong></td>
                    <td>Reserva natural protegida con una gran variedad de flora y fauna silvestre.</td>
                    </tr>
                </tbody>
                </table>
            </section>          
            <section class="galeria">
                <div class="carrusel">
                    <button id="retroceder"><i class="fa-solid fa-chevron-left"></i></button>
                    <div id="imagen"></div>
                    <button id="avanzar"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </section>
            <script>
                window.onload = function () {
                    // Variables
                    const IMAGENES = [
                        "imagenes/tulum_1.jpg",
                        "imagenes/tulum_2.jpg",
                        "imagenes/tulum_3.jpg",
                        "imagenes/tulum_4.jpg",
                        "imagenes/tulum_5.jpg",
                        "imagenes/tulum_6.jpg"
                    ];
                    const TIEMPO_INTERVALO_MILESIMAS_SEG = 1000;
                    let posicionActual = 0;
                    let $botonRetroceder = document.querySelector('#retroceder');
                    let $botonAvanzar = document.querySelector('#avanzar');
                    let $imagen = document.querySelector('#imagen');
                    let intervalo;

                    // Funciones

                    /**
                     * Funcion que cambia la foto en la siguiente posicion
                     */
                    function pasarFoto() {
                        if(posicionActual >= IMAGENES.length - 1) {
                            posicionActual = 0;
                        } else {
                            posicionActual++;
                        }
                        renderizarImagen();
                    }

                    /**
                     * Funcion que cambia la foto en la anterior posicion
                     */
                    function retrocederFoto() {
                        if(posicionActual <= 0) {
                            posicionActual = IMAGENES.length - 1;
                        } else {
                            posicionActual--;
                        }
                        renderizarImagen();
                    }

                    /**
                     * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
                     */
                    function renderizarImagen () {
                        $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
                    }

                    // Eventos
                    $botonAvanzar.addEventListener('click', pasarFoto);
                    $botonRetroceder.addEventListener('click', retrocederFoto);
                    // Iniciar
                    renderizarImagen();
                } 
            </script>
        </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29953.482487178753!2d-87.48938557444056!3d20.20961913264339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4fd40310e42a4b%3A0xeedc0db93ff9ab7!2sTulum%2C%20Q.R.!5e0!3m2!1ses!2smx!4v1679257732859!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
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

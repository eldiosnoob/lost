<!DOCTYPE html>
<html>
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
    <div class="destino-panoramica">
      <img src="imagenes/panoramica-mar.png" alt="">
    </div>          
    <main>
      <div class="main-contenedor">
        <div class="destino-info">
            <h2>Puerto Vallarta</h2>
            <p>Puerto Vallarta es un destino turístico popular en México conocido por sus playas de arena dorada, actividades al aire libre y ambiente relajado. Además de sus playas, Puerto Vallarta tiene una gran variedad de restaurantes y bares, así como tiendas y galerías de arte que vale la pena explorar. Algunas de las actividades populares incluyen paseos en bote, esnórquel, pesca y visitas a las ruinas arqueológicas cercanas.</p>
            <p>Hay una gran variedad de hoteles y resorts en Puerto Vallarta, desde opciones de presupuesto hasta alojamientos de lujo de cinco estrellas. Además, Puerto Vallarta es conocido por su hospitalidad y amabilidad, lo que lo convierte en un lugar ideal para unas vacaciones relajantes y divertidas.</p>
            <section class="lugares">
              <h2>Principales lugares de interés</h2>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Malecón</strong></td>
                    <td>Paseo marítimo con restaurantes, bares, esculturas y vistas impresionantes de la Bahía de Banderas.</td>
                  </tr>
                  <tr>
                    <td><strong>Playa Los Muertos</strong></td>
                    <td>Playa popular con una gran variedad de actividades acuáticas y restaurantes con vistas al mar.</td>
                  </tr>
                  <tr>
                    <td><strong>Islas Marietas</strong></td>
                    <td>Islas protegidas con playas de arena blanca, snorkel y una gran variedad de vida marina.</td>
                  </tr>
                  <tr>
                    <td><strong>El Jardín Botánico de Vallarta</strong></td>
                    <td>Jardín botánico con una gran variedad de plantas y flores nativas de la región, incluyendo orquídeas y cactus.</td>
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
                      "imagenes/vallarta_1.jpg",
                      "imagenes/vallarta_2.jpg",
                      "imagenes/vallarta_3.jpg",
                      "imagenes/vallarta_4.jpg",
                      "imagenes/vallarta_5.jpg"
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119478.57592417578!2d-105.29456471661078!3d20.640857577782732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842145635063c87f%3A0x79cfbf9985bf5274!2sPuerto%20Vallarta%2C%20Jal.!5e0!3m2!1ses!2smx!4v1678084288361!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
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

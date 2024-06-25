<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sayulita</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <a href="VeTravel.html"><img src="logo.png"width="200px" height="100px"></a>
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
            <h2>Sayulita</h2>
            <p>Sayulita es un encantador pueblo costero ubicado en la Riviera Nayarit de México, conocido por sus playas de surf, su ambiente bohemio y su vibrante cultura local. Con sus calles empedradas, coloridas casas y ambiente relajado, Sayulita es un destino turístico popular para aquellos que buscan una experiencia auténtica de México.</p>
            <p>Las principales atracciones de Sayulita incluyen sus playas de surf, como la playa de Sayulita y la playa de Los Muertos, ideales para practicar deportes acuáticos como el surf y el paddleboarding. También puede explorar la cercana selva tropical en busca de cascadas y vida silvestre o visitar los mercados locales para probar la deliciosa gastronomía mexicana y artesanías.</p>
            <section class="lugares">
                <h2>Principales lugares de interés</h2>
                <table>
                <tbody>
                    <tr>
                    <td><strong>Playa de Sayulita</strong></td>
                    <td>Playa de surf popular rodeada de bares, restaurantes y tiendas de artesanías.</td>
                    </tr>
                    <tr>
                    <td><strong>Playa de Los Muertos</strong></td>
                    <td>Playa tranquila y hermosa con una cascada cercana y una gran variedad de vida marina.</td>
                    </tr>
                    <tr>
                    <td><strong>El Mercado del Pueblo</strong></td>
                    <td>Mercado local que ofrece productos frescos, comida mexicana y artesanías.</td>
                    </tr>
                    <tr>
                    <td><strong>Selva tropical de Nayarit</strong></td>
                    <td>Explora la selva tropical cercana y descubre cascadas y vida silvestre.</td>
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
                        "imagenes/sayulita_1.jpg",
                        "imagenes/sayulita_2.jpg",
                        "imagenes/sayulita_3.jpg",
                        "imagenes/sayulita_4.jpg",
                        "imagenes/sayulita_5.jpg"
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29824.451762167082!2d-105.45623680947376!3d20.86977401376712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84211662ea3de98d%3A0x1433c0c1e6d1e84c!2s63728%20Sayulita%2C%20Nay.!5e0!3m2!1ses!2smx!4v1679266225470!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

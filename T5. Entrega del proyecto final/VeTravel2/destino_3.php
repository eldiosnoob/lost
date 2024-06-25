<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mazatlán</title>
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
            <h2>Mazatlán</h2>
            <p>Mazatlán es un destino turístico popular en la costa del Pacífico de México, conocido por su hermosa playa y su animado malecón. Situado en el estado de Sinaloa, Mazatlán es una ciudad costera que ofrece una experiencia auténtica de México, con una rica cultura local y una deliciosa gastronomía de mariscos.</p>
            <p>Las principales atracciones de Mazatlán incluyen la playa de Olas Altas, la catedral de la Inmaculada Concepción y la Isla de los Venados, que se puede visitar en barco para practicar deportes acuáticos como el snorkel y el kayak. También hay muchas opciones para disfrutar de la música en vivo y la vida nocturna en el malecón y en los restaurantes y bares de la ciudad.</p>
            <section class="lugares">
                <h2>Principales lugares de interés</h2>
                <table>
                    <tbody>
                        <tr>
                            <td><strong>Malecón de Mazatlán</strong></td>
                            <td>Paseo marítimo con una amplia variedad de restaurantes, bares y tiendas, así como espectáculos de música en vivo y eventos culturales.</td>
                        </tr>
                        <tr>
                            <td><strong>Playa Olas Altas</strong></td>
                            <td>Playa popular entre los locales y los turistas, con olas ideales para el surf y restaurantes que ofrecen deliciosos platillos de mariscos.</td>
                        </tr>
                        <tr>
                            <td><strong>Catedral de la Inmaculada Concepción</strong></td>
                            <td>Iglesia histórica construida en el siglo XIX en el centro histórico de Mazatlán, con hermosos detalles arquitectónicos y una impresionante vista panorámica desde la torre.</td>
                        </tr>
                        <tr>
                            <td><strong>Faros de Mazatlán</strong></td>
                            <td>Los faros de Mazatlán son dos estructuras ubicadas en la cima de dos cerros que ofrecen una vista panorámica impresionante de la ciudad y la bahía.</td>
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
                        "imagenes/mazatlan_1.jpg",
                        "imagenes/mazatlan_2.jpg",
                        "imagenes/mazatlan_3.jpg",
                        "imagenes/mazatlan_4.jpg",
                        "imagenes/mazatlan_5.jpg",
                        "imagenes/mazatlan_6.jpg"
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234617.67686842123!2d-106.56201991965199!3d23.246682049581814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f5341681837c1%3A0x62a4c4aaf13c72b2!2zTWF6YXRsw6FuLCBTaW4u!5e0!3m2!1ses!2smx!4v1679265896150!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

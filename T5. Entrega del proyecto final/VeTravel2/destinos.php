<!DOCTYPE html>
<html>
  <head>
    <title>Destinos</title>
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
      <h2 style="text-align: center;">Destinos</h2>
      <div class="container">
        <div class="container2">
          <div class="destino">
            <img src="imagenes/destino_1.jpg" alt="Destino 1">
            <div class="descripcion">
              <h2>Puerto Vallarta</h2>
              <p>Playas de arena dorada, actividades al aire libre y ambiente relajado.</p>
              <a href="destino_1.php">Ver más</a>
            </div>
          </div>
          <div class="destino">
            <img src="imagenes/destino_2.jpg" alt="Destino 1">
            <div class="descripcion">
              <h2>Tulum</h2>
              <p>Playas vírgenes, ambiente bohemio y ruinas mayas.</p>
              <a href="destino_2.php">Ver más</a>
            </div>
          </div>
        </div>
        <div class="container2">
          <div class="destino">
            <img src="imagenes/destino_3.jpg" alt="Destino 1">
            <div class="descripcion">
              <h2>Mazatlan</h2>
              <p>Playas, Malecón, vida nocturna y cultura local.</p>
              <a href="destino_3.php">Ver más</a>
            </div>
          </div>
          <div class="destino">
            <img src="imagenes/destino_4.jpg" alt="Destino 1">
            <div class="descripcion">
              <h2>Sayulita</h2>
              <p>Destino de surf popular, cultura bohemia y vida nocturna.</p>
              <a href="destino_4.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="destinos-ofertas">
        <section>
          <h2>Ofertas especiales</h2>
          <p>Aprovecha nuestras ofertas especiales y ahorra en tu próximo viaje.</p>
          <a href="paquetes.php" class="boton">Ver ofertas</a>
        </section>
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

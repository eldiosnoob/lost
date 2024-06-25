<!DOCTYPE html>
<html>
  <head>
    <title>Buscar Hotel - VeTravel</title> <!-- Título de la página -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
    <style>
      body {
        background-color: #f2f2f2; /* Color de fondo */
      }
      .container {
        text-align: center;
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: hsl(0, 0%, 100%);
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input,
  select,
  option,
  input[type="submit"] {
    width: calc(100% - 20px); /* Resta el padding de 10px a cada lado */
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  input[type="date"] {
    padding: 6px;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

    </style>
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
      <h2>Registrar Hotel</h2>
<form action="buscarh.php" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required>

  <label for="telefono">Teléfono:</label>
  <input type="text" id="telefono" name="telefono" required>

  <label for="hotel">Hotel:</label>
  <input type="text" id="hotel" name="hotel" required>

  <label for="destino">Destino:</label>
  <input type="text" id="destino" name="destino" required>

  <label for="fecha_entrada">Fecha de entrada:</label>
  <input type="date" id="fecha_entrada" name="fecha_entrada" required>

  <label for="fecha_salida">Fecha de salida:</label>
  <input type="date" id="fecha_salida" name="fecha_salida" required>

  <label for="habitacion">Tipo de habitación:</label>
  <select id="habitacion" name="habitacion" required>
      <option value="">Seleccione una opción</option>
      <option value="individual">Individual</option>
      <option value="doble">Doble</option>
      <option value="suite">Suite</option>
  </select>

  <label for="huespedes">Cantidad de huéspedes:</label>
  <select id="huespedes" name="huespedes" required>
      <option value="">Seleccione la cantidad</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
  </select>
  <input type="submit" value="Enviar Reserva">
</form>
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
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Vuelos - VeTravel</title> <!-- Título de la página -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
    <style>
      body {
        background-color: #f2f2f2; /* Color de fondo */
        font-family: Arial, sans-serif;
      }

      h2 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            
        }
        select,
        input[type="date"],
        input[type="number"],
        input[type="email"],
        input[type="tel"],
        button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            box-sizing: border-box; /* Esto garantiza que el padding no afecte el tamaño total */
        }
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
   
   <form method="post" action="buscarv.php">
        
        <h2>Registro de Vuelos:</h2>
        <select type="text" name="origen" placeholder="Origen" required>
        <option value="" disabled selected>Selecciona Origen</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Guadalajara">Guadalajara</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Cancun">Cancun</option>
            <option value="Miami">Miami</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Madrid">Madrid</option>
            <option value="Barcelona">Barcelona</option>
        </select>

        <!-- Campo de entrada para Destino -->
        <select type="text" name="destino" placeholder="Destino" required>
        <option value="" disabled selected>Selecciona Destino</option>
            <option value="Cancun">Cancún</option>
            <option value="Miami">Miami</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Guadalajara">Guadalajara</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Madrid">Madrid</option>
            <option value="Barcelona">Barcelona</option>
        </select>

        <!-- Campo de entrada para la fecha -->
        <input type="date" name="fecha" required>

        <!-- Campo de entrada para el número de pasajeros -->
        <input type="number" name="pasajeros" placeholder="Número de pasajeros" required>

        <input type="email" name="correo" placeholder="Correo electrónico" required>
         <!-- Campo de entrada para el número de teléfono -->
         <input type="tel" name="telefono" placeholder="Número de teléfono" required>
         <!-- Botón para enviar el formulario -->
         <button type="submit" class="boton-buscar">Reservar</button>
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


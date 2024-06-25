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
      <div class="container">
      <h1>Buscar Hotel</h1>
        <form action="#" method="get">
            <select name="ubicacion" required>
                <option value="" disabled selected>Selecciona una ubicación</option>
                <option value="AGS">Aguascalientes</option>
                <option value="BC">Baja California</option>
                <option value="BCS">Baja California Sur</option>
                <option value="CAMP">Campeche</option>
                <option value="CHIS">Chiapas</option>
                <option value="CHIH">Chihuahua</option>
                <option value="COAH">Coahuila</option>
                <option value="COL">Colima</option>
                <option value="DGO">Durango</option>
                <option value="JAL">Jalisco</option>
                <option value="MICH">Michoacán</option>
                <option value="MOR">Morelos</option>
                <option value="NAY">Nayarit</option>
                <option value="NL">Nuevo León</option>
                <option value="OAX">Oaxaca</option>
                <option value="PUE">Puebla</option>
                <option value="SLP">San Luis Potosí</option>
            </select>
            <div id="hoteles">
                <h2>Hoteles Disponibles:</h2>
                <div id="AGS" style="display: none;">
                    <ul>
                        <li>Quinta Real Aguascalientes<button>reserva</button></li> <br>
                        <li>Aguascalientes Marriott Hotel<button>reserva</button></li><br>
                        <li>Fiesta Americana Aguascalientes<button>reserva</button></li>
                    </ul>
                </div>
                <div id="BC" style="display: none;">
                    <ul>
                        <li>Hotel Araiza Mexicali<button>reserva</button></li><br>
                        <li>Quartz Hotel & Spa<button>reserva</button></li><br>
                        <li>Hotel Coral & Marina<button>reserva</button></li>
                    </ul>
                </div>
                <div id="BCS" style="display: none;">
                    <ul>
                        <li>Waldorf Astoria Los Cabos Pedregal<button>reserva</button></li><br>
                        <li>CostaBaja Resort & Spa<button>reserva</button></li><br>
                        <li>One&Only Palmilla<button>reserva</button></li>
                    </ul>
                </div>
                <div id="CAMP" style="display: none;">
                    <ul>
                        <li>Hacienda Puerta Campeche, a Luxury Collection Hotel<button>reserva</button></li><br>
                        <li>Hotel Plaza Campeche<button>reserva</button></li><br>
                        <li>Gamma Campeche Malecón<button>reserva</button></li>
                    </ul>
                </div>
                <div id="CHIS" style="display: none;">
                    <ul>
                        <li>Hotel Bo<button>reserva</button></li><br>
                        <li>Sombra del Agua<button>reserva</button></li><br>
                        <li>Marriott Tuxtla Gutiérrez Hotel<button>reserva</button></li>
                    </ul>
                </div>
                <div id="CHIH" style="display: none;">
                    <ul>
                        <li>Sheraton Chihuahua Soberano<button>reserva</button></li><br>
                        <li>Hotel Lucerna Ciudad Juárez<button>reserva</button></li><br>
                        <li>SCasa Grande Chihuahua<button>reserva</button></li>
                    </ul>
                </div>
                <div id="COAH" style="display: none;">
                    <ul>
                        <li>Quinta Real Saltillo<button>reserva</button></li>
                        <li>DoubleTree Suites by Hilton Hotel Saltillo<button>reserva</button></li><br>
                        <li>Fiesta Inn Torreón Galerías<button>reserva</button></li>
                    </ul>
                </div>
                <div id="COL" style="display: none;">
                    <ul>
                        <li>Fiesta Inn Colima<button>reserva</button></li><br>
                        <li>Wyndham Garden Colima<button>reserva</button></li><br>
                        <li>Hotel Mision Colima<button>reserva</button></li>
                    </ul>
                </div>
                <div id="DGO" style="display: none;">
                    <ul>
                        <li>Hotel Gobernador<button>reserva</button></li><br>
                        <li>Victoria Express Durango<button>reserva</button></li><br>
                        <li>Holiday Inn Durango<button>reserva</button></li>
                    </ul>
                </div>
                <div id="JAL" style="display: none;">
                    <ul>
                        <li>Hotel Riu Plaza Guadalajara<button>reserva</button></li><br>
                        <li>Hotel Morales Historical & Colonial Downtown Core<button>reserva</button></li><br>
                        <li>Hyatt Regency Andares Guadalajara<button>reserva</button></li>
                    </ul>
                </div>
                <div id="MICH" style="display: none;">
                    <ul>
                        <li>Hotel Misión Pátzcuaro Centro Histórico<button>reserva</button></li><br>
                        <li>Hotel de la Soledad<button>reserva</button></li><br>
                        <li>Hotel Virrey de Mendoza<button>reserva</button></li>
                    </ul>
                </div>
                <div id="MOR" style="display: none;">
                    <ul>
                        <li>Hotel de la Soledad<button>reserva</button></li><br>
                        <li>Hotel Virrey de Mendoza<button>reserva</button></li><br>
                        <li>Hotel Casa Grande Morelia<button>reserva</button></li>
                    </ul>
                </div>
                <div id="NAY" style="display: none;">
                    <ul>
                        <li>W Punta de Mita<button>reserva</button></li><br>
                        <li>Marival Emotions Resort & Suites All-Inclusive<button>reserva</button></li><br>
                        <li>Villa La Estancia Beach Resort & Spa Riviera Nayarit<button>reserva</button></li>
                    </ul>
                </div>
                <div id="NL" style="display: none;">
                    <ul>
                        <li>Grand Fiesta Americana Monterrey Valle<button>reserva</button></li><br>
                        <li>Safi Royal Luxury Valle<button>reserva</button></li><br>
                        <li>NH Collection Monterrey San Pedro<button>reserva</button></li>
                    </ul>
                </div>
                <div id="OAX" style="display: none;">
                    <ul>
                        <li>Quinta Real Oaxaca<button>reserva</button></li><br>
                        <li>Hotel Casa Oaxaca El Sueño<button>reserva</button></li><br>
                        <li>Hotel Parador de Alcalá Oaxaca<button>reserva</button></li>
                    </ul>
                </div>
                <div id="PUE" style="display: none;">
                    <ul>
                        <li>La Purificadora<button>reserva</button></li><br>
                        <li>Rosewood Puebla<button>reserva</button></li><br>
                        <li>Hotel Boutique Casareyna<button>reserva</button></li>
                    </ul>
                </div>
                <div id="SLP" style="display: none;">
                    <ul>
                        <li>Hotel Museo Palacio de San Agustín<button>reserva</button></li><br>
                        <li>Quinta Real Palacio de San Agustín<button>reserva</button></li><br>
                        <li>NH Collection San Luis Potosí Zona Industrial<button>reserva</button></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.querySelector('select[name="ubicacion"]').addEventListener('change', function() {
            var ubicacion = this.value;
            var hoteles = document.querySelectorAll('#hoteles > div');
            hoteles.forEach(function(element) {
                element.style.display = 'none';
            });
            document.getElementById(ubicacion).style.display = 'block';
        });
    </script>
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
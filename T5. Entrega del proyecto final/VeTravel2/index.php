<!DOCTYPE html>
<html>
  <head>
    <title>VeTravel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/b18a115cef.js" crossorigin="anonymous"></script>
    <style>
      .slider {
          width: 100%;
          overflow: hidden;
          position: relative;
          text-align: center; /* Centro las imágenes */
      }

      .slide {
          display: none; /* Oculta las imágenes por defecto */
          width: 100%; /* O el ancho deseado para cada imagen */
      }

      .slide img {
          width: 100%;
          height: 500px; /* Ajusta la altura según sea necesario */
          object-fit: cover; /* Asegura que las imágenes cubran el contenedor */
      }

      .btn-prev,
      .btn-next {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          cursor: pointer;
          background-color: rgba(141, 33, 78, 0.5);
          color: white;
          padding: 10px;
          z-index: 1;
      }

      .btn-prev {
          left: 0;
      }

      .btn-next {
          right: 0;
      }

      .user-options {
          display: flex;
          gap: 20px;
      }

      .user-options a {
          text-decoration: none;
          color: #000;
          font-size: 16px;
      }

      .user-options i {
          margin-right: 5px;
      }

      nav ul {
          list-style: none;
          padding: 0;
          display: flex;
          gap: 20px;
      }

      nav a {
          text-decoration: none;
          color: #000;
          font-size: 16px;
      }

      nav i {
          margin-right: 5px;
      }

      .user-info {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .user-info .user-name {
            font-size: 0.8em;
            margin-top: 5px;
        }

        .user-info a {
            font-size: 0.8em;
            color: #000;
            text-decoration: none;
            margin-top: 5px;
        }

        .user-info a:hover {
            text-decoration: underline;
        }
    </style>
  </head>
  <body>
    <header>
        <a href="VeTravel.html"><img src="logo.png" width="200px" height="100px"></a>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="destinos.php"><i class="fa fa-map-marker-alt"></i> Destinos</a></li>
                <li><a href="paquetes.php"><i class="fa fa-suitcase"></i> Paquetes</a></li>
                <li><a href="vuelos.php"><i class="fa fa-plane"></i> Vuelos</a></li>
                <li><a href="hoteles.php"><i class="fa fa-hotel"></i> Hoteles</a></li>
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
            <a href="carrito.html"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </header>
    <div class="panoramica">
        <div class="slider">
            <div class="slide">
                <img src="imagenes/panoramica.jpeg" alt="im1">
            </div>
            <div class="slide">
                <img src="imagenes/playa2.jpg" alt="im2">
            </div>
            <div class="slide">
                <img src="imagenes/avion.jpg" alt="im3">
            </div>
        </div>
    </div>
    <main>
        <div class="destinos-ofertas">
            <section>
                <h2>Descubre nuevos destinos</h2>
                <p>Te ofrecemos una amplia variedad de destinos en todo el mundo.</p>
                <a href="destinos.html" class="boton">Ver destinos</a>
            </section>
            <section>
                <h2>Ofertas especiales</h2>
                <p>Aprovecha nuestras ofertas especiales y ahorra en tu próximo viaje.</p>
                <a href="paquetes.html" class="boton">Ver ofertas</a>
            </section>
        </div>
    </main>
    <footer>
        <div class="container-footer">
            <div class="row">
                <div class="col1">
                    <div class="col">
                        <h4>Contacto</h4>
                        <p>Teléfono: +52 44 46 71 93 23</p>
                        <p>Email: VeTravel@gmail.com</p>
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
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 3000); // Cambia de imagen cada 3 segundos
        }
    </script>
</body>
</html>
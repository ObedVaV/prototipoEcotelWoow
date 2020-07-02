<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tema de color -->
  <meta name="theme-color" content="#EDBA29" />
  <!-- Tema de color en Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#EDBA29">
  <!-- Tema de color en iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#EDBA29">
  <!-- iOS PWA activado -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Título del sitio -->
  <title>Woow - Ecotel</title>
  <!-- Descripción del sitio -->
  <meta name="description" content="Woow - Planes de telefonía.">
  <!-- Keywords del sitio -->
  <meta name="Keywords"
    content="Woow, telefonia, planes, planes moviles, celulares, telefonos, comprar celular, planes de telefonía" />

  <!-- GP Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/custom_bootstrap.css">
  <!-- Components CSS -->
  <link rel="stylesheet" href="./assets/css/components.css">
  <!-- Material Design Icons -->
  <link href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css" rel="stylesheet">
  <!-- Google Fonts - Montserrat (regular, medium, bold) -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Swipe Slider CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <!-- jQuery 3.4.1 JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
  <!-- Page content -->



  <!-- Barra de navegación con botonera -->
  <nav class="bg-primary">
    <div class="container py-rem5">
      <div class="d-flex align-items-center justify-content-between">
        <a href="./index.php" class="text-white">
          <i class="mdi mdi-arrow-left text-h4 i-no-m"></i>
        </a>
        <a href="./carrito.php" class="text-white">
          <i class="mdi mdi-cart text-h4 i-no-m"></i>
        </a>
      </div>
    </div>
  </nav>
  <!-- Barra de navegación con botonera -->


  <!-- Fotografía del producto -->
  <section class="mt-navHeight bg-white">
    <div class="container">
      <div class="product-img d-flex align-items-center justify-content-center mx-auto" style="height: 280px">
        <img class="h-100" src="./assets/img/products/example.png" alt="">
      </div>
    </div>
  </section>
  <!-- End of Fotografía del producto -->



  <!-- Nombre y descripción del producto -->
  <section class="bg-lightGray">
    <div class="container py-1rem5 text-center">
      <h2 class="text-h5 font-weight-bolder">Apple iPhone 8</h2>
      <p class="text-lg mt-rem5">64 GB</p>
    </div>
  </section>
  <!-- End of Nombre y descripción del producto -->



  <!-- Características y planes del producto -->
  <section class="bg-white mb-botoneraHeight">
    <div class="container py-1rem5">

      <!-- Características -->
      <div id="caracteristicas">
        <h6 class="font-weight-bolder">Características</h6>
        <ul class="text-md list-unstyled mt-rem5">
          <li>Pantalla de 6.3"</li>
          <li>Cámara frontal de 20 MP</li>
          <li>Cámara trasera de 24 MP</li>
          <li class="d-flex align-items-center">
            <span class="mr-rem5">Colores disponibles:</span>
            <div class="d-flex align-items-center">
              <span class="color-bullet" style="background-color: #fff;"></span>
              <span class="color-bullet" style="background-color: #000;"></span>
              <span class="color-bullet" style="background-color: #FFCE85;"></span>
            </div>
          </li>
        </ul>
      </div>
      <!-- End of Características -->

      <hr class="my-1rem5">

      <!-- Planes disponibles -->
      <div id="planesDisponibles">
        <h6 class="font-weight-bolder">Planes disponibles</h6>
        <!-- Carrusel de planes -->
        <div class="swiper-container mt-1rem5" id="swiperPlanes">
          <div class="swiper-wrapper">

            <!-- Bucle de planes -->
            <?php For($a= 0; $a < 5; $a++ ){ ?>
            <div class="swiper-slide">
              <div class="tabla-planes rounded overflow-hidden">
                <div class="tabla-header bg-primary text-white py-rem5 px-1rem text-center">
                  <p class="text-md font-weight-bold text-white">
                    Plan Ecotel <?= $a + 1 ?>
                  </p>
                </div>
                <div class="tabla-body bg-lightGray p-1rem">

                  <div class="row tabla-fila">
                    <div class="col-4">
                      <p class="text-xs font-weight-bolder">
                        Minutos y SMS incluidos
                      </p>
                    </div>
                    <div class="col-8">
                      <p class="text-xs">
                        Ilimitados en México, Estados Unidos y Canadá
                      </p>
                    </div>
                  </div>

                  <div class="row tabla-fila">
                    <div class="col-4">
                      <p class="text-xs font-weight-bolder">
                        Datos incluidos
                      </p>
                    </div>
                    <div class="col-8">
                      <p class="text-xs">
                        6 GB de navegación en México, Estados Unidos y Canadá.
                      </p>
                    </div>
                  </div>

                  <div class="row tabla-fila">
                    <div class="col-4">
                      <p class="text-xs font-weight-bolder">
                        Redes sociales ilimitadas incluidas
                      </p>
                    </div>
                    <div class="col-8">
                      <p class="text-xs">
                        Facebook, Twitter y WhatsApp en México, Estados Unidos y Canadá.
                      </p>
                    </div>
                  </div>

                  <div class="row tabla-fila">
                    <div class="col-4">
                      <p class="text-xs font-weight-bolder">
                        Apps multimedia incluidas
                      </p>
                    </div>
                    <div class="col-8">
                      <p class="text-xs">
                        2 GB de navegación exclusivo para Netflix y YouTube. No incluye la licencia de Netflix, la cual
                        deberá ser contratada por el cliente.
                      </p>
                    </div>
                  </div>

                  <div class="row tabla-fila">
                    <div class="col-4">
                      <p class="text-xs font-weight-bolder">
                        Otras apps incluidas
                      </p>
                    </div>
                    <div class="col-8">
                      <p class="text-xs">
                        UBER, Instagram y Snapchat (solamente en México).
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php } ?>
            <!-- End of Bucle de planes -->

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <!-- End of Carrusel de planes -->
      </div>
    </div>
    <!-- End of Planes disponibles -->

    </div>
  </section>
  <!-- End of Características del producto -->



  <!-- Botonera inferior -->
  <section class="botoneraFixed bg-white">
    <div class="container py-1rem">
      <div class="row">
        <div class="col-6 pr-rem5">
          <a href="#" class="btn btn-secondary w-100">Comprar ahora</a>
        </div>
        <div class="col-6 pl-rem5">
          <a href="./carrito.php" class="btn btn-primary w-100">Añadir al carrito</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Botonera inferior -->



  <!-- End of Page content -->

  <!-- Lottie web player JS -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <!-- GSAP JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js"></script>
  <!-- Components JS -->
  <script src="./assets/js/components.js"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

  <script>
  $(document).ready(function() {
    $('.mb-botoneraHeight').css("margin-bottom", $('.botoneraFixed').css("height"));
  });

  var swiper = new Swiper('#swiperPlanes', {
    pagination: {
      el: '.swiper-pagination',
    },
    loop: true,
    autoplay: {
      delay: 5000,
    },
    speed: 500,
    spaceBetween: 32,
  });
  </script>

</body>

</html>
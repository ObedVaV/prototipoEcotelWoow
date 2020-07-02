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
        <a href="./carrito.php" class="text-white">
          <i class="mdi mdi-arrow-left text-h4 i-no-m"></i>
        </a>
        <!-- <a href="#" class="text-white">
          <i class="mdi mdi-cart text-h4 i-no-m"></i>
        </a> -->
      </div>
    </div>
  </nav>
  <!-- Barra de navegación con botonera -->



  <!-- Cabecera con título -->
  <section class="mt-navHeight woow-header bg-primary">
    <div class="container text-white text-center py-rem5">
      <p class="text-sm">Método de pago</p>
    </div>
  </section>
  <!-- End of Cabecera con título -->



  <!-- Resumen de compra -->
  <section class="bg-white">
    <div class="container py-1rem5">
      <div id="resumenCompra">
        <h6 class="font-weight-bolder">Resumen de compra</h6>
        <div class="mt-rem5">

          <div class="d-flex text-md align-items-center justify-content-between">
            <p class="font-weight-bold">Subtotal:</p>
            <span>$71,848.00</span>
          </div>

          <div class="d-flex text-md align-items-center justify-content-between">
            <p class="font-weight-bold">IVA:</p>
            <span>$352.00</span>
          </div>

          <div class="d-flex text-md align-items-center justify-content-between">
            <p class="font-weight-bold">Descuento:</p>
            <span>$0.00</span>
          </div>

          <hr class="my-rem5">
          <div class="d-flex text-lg align-items-center justify-content-between">
            <p class="font-weight-bolder">Total:</p>
            <span class="font-weight-bolder">$72,200.00</span>
          </div>
          <div class="d-flex text-lg align-items-center justify-content-between">
            <p class="font-weight-bolder">Pago mensual:</p>
            <span class="font-weight-bolder">$2,005.55</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Resumen de compra -->



  <!-- Opciones de pago -->
  <section class="mb-botoneraHeight">
    <div class="container py-1rem5">
      <h6 class="font-weight-bolder">Selecciona un método de pago</h6>
      <div class="mt-2rem text-center">
        <img src="./assets/img/logos/payjoy.png" alt="" height="48">
        <hr>
        <img src="./assets/img/logos/banwire.png" alt="" height="56">
      </div>
    </div>
  </section>
  <!-- End of Opciones de pago -->



  <!-- Botonera inferior -->
  <section class="botoneraFixed bg-white">
    <div class="container py-1rem">
      <div>
        <a href="#" class="btn btn-primary w-100">Finalizar compra</a>
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
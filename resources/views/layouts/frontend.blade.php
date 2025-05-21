<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MTS NURUL-HUDA</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('asset/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&family=Poppins:wght@100..900&family=Raleway:wght@100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('asset/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/user/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('asset/user/css/main.css') }}" rel="stylesheet">

  @yield('style')

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('layouts.components_frontend.header')

  <main class="main">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <!-- You can add about content here -->
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Pilih halaman</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">Informasi</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
            <li><a href="#services">Eskul</a></li>
            <li><a href="#doctors">Karyawan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <div class="credits">
        Designed by <a href="">mah gubluk</a> |
        Distributed by <a href="">Diva</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('asset/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/user/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('asset/user/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('asset/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('asset/user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('asset/user/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('asset/user/js/main.js') }}"></script>
  @stack('scripts')

</body>
</html>

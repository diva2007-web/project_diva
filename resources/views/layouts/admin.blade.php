<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ATMIN</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/logos/d.png') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}">

  @yield('style')
</head>

<body>
  <!-- Page Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
       data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Header and Sidebar Includes -->
    @include('layouts.components_admin.header')
    @include('layouts.components_admin.sidebar')

    <!-- Main Content Wrapper -->
    <div class="body-wrapper">
      @yield('content')
    </div>
    <!-- End Main Content Wrapper -->

  </div>
  <!-- End Page Wrapper -->

  <!-- Scripts -->
  <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('admin/js/app.min.js') }}"></script>
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  @stack('scripts')
</body>

</html>

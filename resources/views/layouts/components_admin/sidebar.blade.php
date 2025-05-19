<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <!-- Logo -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
        <img src="{{ asset('admin/images/logos/kicil.png') }}" alt="Logo" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>

    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
      <ul id="sidebarnav">
        <!-- Section: Home -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
          <span class="hide-menu">Home</span>
        </li>

        <!-- Dashboard -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <!-- Informasi -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('informasi.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Informasi</span>
          </a>
        </li>

        <!-- Karyawan -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('karyawan.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Karyawan</span>
          </a>
        </li>

        <!-- Eskul -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('eskul.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Eskul</span>
          </a>
        </li>

        <!-- Fasilitas -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('fasilitas.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Fasilitas</span>
          </a>
        </li>

        <!-- Prestasi -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('prestasi.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Prestasi</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

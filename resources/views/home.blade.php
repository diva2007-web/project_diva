<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EL ATMINNN</title>
  <link rel="shortcut icon" type="image/png" class="w-18 h-5" href="{{ asset('admin/images/logos/d.png') }}" />
  <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}" />
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('layouts.components_admin.header')
  </nav>

  @include('layouts.components_admin.sidebar')

  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      <div class="container-fluid">
        <div class="row">
          
          <!-- Traffic Overview Card -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                  Siswa
                  <span>
                    <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted"
                      data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                      data-bs-title="Traffic Overview"></iconify-icon>
                  </span>
                </h5>
                <div id="traffic-overview"></div>
              </div>
            </div>
          </div>

          <!-- Page View Table -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">View by Page Title and Screen Class</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap align-middle mb-0">
                    <thead>
                      <tr class="border-2 border-bottom border-primary border-0">
                        <th scope="col" class="ps-0">Page Title</th>
                        <th scope="col">Link</th>
                        <th scope="col" class="text-center">Pageviews</th>
                        <th scope="col" class="text-center">Page Value</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row" class="ps-0 fw-medium">
                          <span class="table-link1 text-truncate d-block">Welcome to our website</span>
                        </th>
                        <td>
                          <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
                        </td>
                        <td class="text-center fw-medium">18,456</td>
                        <td class="text-center fw-medium">$2.40</td>
                      </tr>
                      <tr>
                        <th scope="row" class="ps-0 fw-medium">
                          <span class="table-link1 text-truncate d-block">Modern Admin Dashboard Template</span>
                        </th>
                        <td>
                          <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
                        </td>
                        <td class="text-center fw-medium">17,452</td>
                        <td class="text-center fw-medium">$0.97</td>
                      </tr>
                      <tr>
                        <th scope="row" class="ps-0 fw-medium">
                          <span class="table-link1 text-truncate d-block">Explore our product catalog</span>
                        </th>
                        <td>
                          <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
                        </td>
                        <td class="text-center fw-medium">12,180</td>
                        <td class="text-center fw-medium">$7.50</td>
                      </tr>
                      <tr>
                        <th scope="row" class="ps-0 fw-medium">
                          <span class="table-link1 text-truncate d-block">Comprehensive User Guide</span>
                        </th>
                        <td>
                          <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
                        </td>
                        <td class="text-center fw-medium">800</td>
                        <td class="text-center fw-medium">$5.50</td>
                      </tr>
                      <tr>
                        <th scope="row" class="ps-0 fw-medium border-0">
                          <span class="table-link1 text-truncate d-block">Check out our services</span>
                        </th>
                        <td class="border-0">
                          <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
                        </td>
                        <td class="text-center fw-medium border-0">1,300</td>
                        <td class="text-center fw-medium border-0">$2.15</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Footer -->
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">
            Design and Developed by
            <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">
              AdminMart.com
            </a>
            Distributed by
            <a href="https://themewagon.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">
              ThemeWagon
            </a>
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('admin/js/app.min.js') }}"></script>
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>

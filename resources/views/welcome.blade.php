@extends('layouts.frontend')

@section('content')
<!-- Hero Section -->
<div class="hero">
  <div class="hero-slide">
    <div class="img overlay" style="background-image: url('{{ asset('asset/user/images/yapinda2.jpg') }}')"></div>
  </div>
</div>

<!-- Tentang Sekolah -->
<div class="section section-4 bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-5">
        <h2 class="font-weight-bold heading text-primary mb-4">Tentang Sekolah!!</h2>
        <p class="text-black-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          enim pariatur similique debitis vel nisi qui reprehenderit.
        </p>
      </div>
    </div>

    <div class="row justify-content-between mb-5">
      <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
        <div class="img-about dots">
          <img src="{{ asset('asset/user/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="d-flex feature-h mb-4">
          <span class="wrap-icon me-3"><span class="icon-home2"></span></span>
          <div class="feature-text">
            <h3 class="heading">2M Properties</h3>
            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
          </div>
        </div>
        <div class="d-flex feature-h mb-4">
          <span class="wrap-icon me-3"><span class="icon-person"></span></span>
          <div class="feature-text">
            <h3 class="heading">Top Rated Agents</h3>
            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
          </div>
        </div>
        <div class="d-flex feature-h">
          <span class="wrap-icon me-3"><span class="icon-security"></span></span>
          <div class="feature-text">
            <h3 class="heading">Legit Properties</h3>
            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Eskul Section -->
<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">ESKUL</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="property-slider-wrap">
          <div class="property-slider">
            @foreach ($eskul as $data)
            <div class="property-item">
              <div class="property-content">
                <div>
                  <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="Foto Eskul" style="width: 450px;">
                </div>
                <div>
                  <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                  <span class="city d-block mb-3">{{ $data->nama_eskul }}</span>
                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption">2 beds</span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption">2 baths</span>
                    </span>
                  </div>
                  <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- Slider Nav -->
          <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Features Section -->
<section class="features-1">
  <div class="container">
    <div class="row">
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature">
          <span class="flaticon-house"></span>
          <h3 class="mb-3">Our Properties</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
          <p><a href="#" class="learn-more">Learn More</a></p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
        <div class="box-feature">
          <span class="flaticon-building"></span>
          <h3 class="mb-3">Property for Sale</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
          <p><a href="#" class="learn-more">Learn More</a></p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="box-feature">
          <span class="flaticon-house-3"></span>
          <h3 class="mb-3">Real Estate Agent</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
          <p><a href="#" class="learn-more">Learn More</a></p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
        <div class="box-feature">
          <span class="flaticon-house-1"></span>
          <h3 class="mb-3">House for Sale</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
          <p><a href="#" class="learn-more">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Agents -->
<div class="section section-5 bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6 mb-5">
        <h2 class="font-weight-bold heading text-primary mb-4">Our Agents</h2>
        <p class="text-black-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.
        </p>
      </div>
    </div>

    <div class="row">
      @foreach ($karyawan as $data)
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="Foto" style="width: 200px; height: auto;">
        <div class="person-contents">
          <h2 class="mb-0"><a href="#">{{ $data->nama }}</a></h2>
          <span class="meta d-block mb-3">Real Estate Agent</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam,
            minus culpa doloremque odio, neque molestias?
          </p>
          <ul class="social list-unstyled list-inline dark-hover">
            <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
            <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

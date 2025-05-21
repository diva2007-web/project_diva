@extends('layouts.frontend')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section light-background">
  <img src="{{ asset('asset/user/img/yapinda2_resized.jpg') }}" alt="" data-aos="fade-in" style="filter: blur(5px);">

  <div class="container position-relative">
    <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
      <h2>MTS NURUL HUDA</h2>
    </div>

    <div class="content row gy-4">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
          <h3>Mts Nurul Huda ada apa aja sih?</h3>
          <div class="text-center">
            <a href="#about" class="more-btn">
              <span>Learn More</span> <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div><!-- End Content -->
  </div>
</section>
<!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4 gx-5">
      @foreach ($informasi as $data)
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="" style="width: 500px;">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <h3>{{ $data->judul }}</h3>
          <p>{{ $data->deskripsi }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /About Section -->

<!-- Fasilitas Section -->
<section id="fasilitas" class="fasilitas section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Fasilitas</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      @foreach ($fasilitas as $data)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="" style="width: 100px;">
            <a href="#" class="stretched-link">
              <h3>{{ $data->nama_fasilitas }}</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /Fasilitas Section -->

<!-- Eskul Section -->
<section id="services" class="services section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Eskul</h2>
    <p>Eskul-eskul di MTS Nurul Huda</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      @foreach ($eskul as $data)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="" style="width: 100px;">
            <a href="#" class="stretched-link">
              <h3>{{ $data->nama_eskul }}</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /Eskul Section -->

<!-- Karyawan Section -->
<section id="doctors" class="doctors section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Karyawan</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      @foreach ($karyawan as $data)
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div>
              <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="" style="width: 100px;">
            </div>
            <div class="member-info">
              <h4>{{ $data->nama }}</h4>
              <span>{{ $data->tugas }}</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /Karyawan Section -->

@endsection

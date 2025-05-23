@extends ('layouts.frontend')
@section('content')
    <section class="features-1">
        <div class="container">
            <div class="row">
                @foreach ($informasi as $data)
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="Foto"
                                style="width: 100px; height: auto;">
                            <h3 class="mb-3">{{ $data->judul }}</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptates, accusamus.
                            </p>
                            <p><a href="#" class="learn-more">Learn More</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sekolah Bina Mitra Wahana</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('web/assets/img/bmw.png') }}" rel="icon">
    <link href="{{ url('web/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,700,700i|Poppins:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('web/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('web/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('web/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('web/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('web/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="#hero" class="scrollto"><img style="margin-left: 100%"
                        src="{{ url('web/assets/img/bmw.png') }}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-right: 5%">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#hotels">News</a></li>
                    <li><a class="nav-link scrollto" href="#buy-tickets">Prestasi</a></li>
                    <li><a class="nav-link scrollto" href="#speakers">Facilities</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Sekolah <br><span>Bina Mitra Wahana</span></h1>
            <p class="mb-4 pb-0">Jl. Kulim No.88, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292</p>
            <a href="https://youtu.be/O6yBzX1Bcz4?si=mOfirsACNpMt3NPL" class="glightbox play-btn mb-4"></a>
            {{-- <a href="#about" class="about-btn scrollto">About</a> --}}
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row">
                    <div class="col">
                        <h2>About School</h2>
                        <p>Sekolah BINA MITRA WAHANA Kota Pekanbaru adalah sekolah di Kota Pekanbaru, Provinsi Riau,
                            dengan alamat JL. KULIM UJUNG NO.88 Tampan Kec. Payung Sekaki. Menyelenggarakan pembelajaran
                            selama 5 hari dalam seminggu (Senin-Jumat) dengan model pembelajaran Sehari Penuh. Misi
                            sekolah ini adalah memberikan pendidikan berkualitas tinggi yang mengembangkan potensi
                            akademis dan karakter siswa.</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Hotels Section ======= -->
        <section id="hotels" class="section-with-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>News</h2>
                    <p>Berita terbaru dari sekolah</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($berita as $b)
                        <div class="col-lg-4 col-md-6 ">
                            <div class="hotel ">
                                <div class="hotel-img rounded">
                                    <img src="{{ Storage::url('public/admin/' . $b->foto) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <h3><a href="#">{{ $b->judul }}</a></h3>
                                <p>{{ $b->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section><!-- End Hotels Section -->

        <section id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Prestasi</h2>
                    <p>Prestasi yang luar biasa</p>
                </div>

                <div class="row">
                    @foreach ($prestasi as $p)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">

                                    <h6 class="card-price text-center">{{ $p->prestasi }}</h6>

                                    <hr>
                                    <div>
                                        <div class="row g-0">
                                            <div class="col-md-4" style="margin: auto">
                                                <img src="{{ Storage::url('public/admin/' . $p->foto) }}"
                                                    alt="" class="img-fluid rounded-start">
                                            </div>
                                            <div class="col-md-8" style="margin: auto">
                                                <h5 class="card-title text-dark text-uppercase">{{ $p->nama }}
                                                </h5>
                                                <p class="card-date"><i class="bi bi-calendar-event-fill">
                                                    {{ $p->tanggal }}</i></p>
                                                <p class="card-desc">{{ $p->deskripsi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <hr>
                                    <div class="text-center mb-2">
                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">See
                                            More</button>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            {{-- <!-- Modal Order Form -->
            <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="font-size: 14px; font-family:poppins; font-weight:500">Prestasi</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-0">
                            <div class="col-md-4" style="margin: auto">
                                <img src="{{ Storage::url('public/admin/' . $p->foto) }}"
                                    alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8" style="margin: auto">
                                <p class="card-desc">{{ $p->deskripsi }}</p>
                            </div>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal --> --}}

        </section><!-- End Buy Ticket Section -->

        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Facilities</h2>
                    <p>Fasilitas lengkap dan bersih</p>
                </div>

                <div class="row">
                    @foreach ($fasilitas as $f)
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="speaker " data-aos="fade-up" data-aos-delay="100">
                                <a href="{{ Storage::url('public/admin/' . $f->foto) }}" class="gallery-lightbox">
                                    <img src="{{ Storage::url('public/admin/' . $f->foto) }}" alt=""
                                        class="img-fluid rounded"></a>
                                <div class="details">
                                    <h3 class=""><a href="">{{ $f->judul }}</a></h3>
                                    <div class="social">
                                        <p>{{ $f->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

        </section><!-- End Speakers Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>
            <div class="gallery-slider swiper " data-aos="fade-up" data-aos-delay="100">
                <h5 class="text-center mb-0">Photos</h5>
                <div class="swiper-wrapper align-items-center">
                    @foreach ($galeri as $g)
                        <div class="swiper-slide" >
                            <a href="{{ Storage::url('public/admin/' . $g->foto) }}" class="gallery-lightbox">
                                <img src="{{ Storage::url('public/admin/' . $g->foto) }}" class="img-fluid rounded"
                                    alt=""></a>
                            {{ $g->judul }}
                            <p>{{ $g->tanggal }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="gallery-slider swiper">
                    <h5 class="text-center mt-3">Videos</h5>
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($galeri as $g)
                            <div class="swiper-slide">
                                <a href="{{ Storage::url('public/admin/' . $g->video) }}" class="gallery-lightbox">
                                    <video width="100%" height="auto" controls>
                                        <source src="{{ Storage::url('public/admin/' . $g->video) }}"
                                            type="video/mp4">
                                    </video></a>

                                {{ $g->judul }}
                                <p>{{ $g->caption }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination"></div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Contact us down below</p>
                </div>

                <div class="row contact-info">
                    @foreach ($kontak as $k)
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <address>
                                    <a href="geo:0,0?q={{ urlencode($k->alamat) }}">{{ $k->alamat }}</a>
                                </address>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="bi bi-phone"></i>
                                <h3>Phone Number</h3>
                                <p><a href="tel:{{ $k->notelp }}">{{ $k->notelp }}</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:{{ $k->email }}">{{ $k->email }}</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <section id="venue">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="row g-0">
                        <div class="col-lg-6 venue-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1336.674424805827!2d101.42436448267887!3d0.5433312418181273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab8e59628711%3A0x81501aea3894d23e!2sYayasan%20Bina%20Mitra%20Wahana!5e0!3m2!1sen!2sid!4v1703872149153!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-6 venue-info">
                            <div class="row justify-content-center">
                                <div class="col-11 col-lg-8 position-relative">
                                    <h3>Contact Us</h3>
                                    @foreach ($kontak as $k)
                                        <p>
                                            JL. KULIM UJUNG NO.88 <br>
                                            Tampan, Kec. Payung Sekaki <br>
                                            Kota Pekanbaru Prov. Riau <br>
                                            <i class="bi bi-phone"></i><a href="tel:{{ $k->notelp }}">
                                                : {{ $k->notelp }}</a><br>
                                            <i class="bi bi-envelope"></i><a href="mailto:{{ $k->email }}">
                                                : {{ $k->email }}</a><br>
                                            <i class="bi bi-facebook"></i><a
                                                href="https://www.facebook.com/{{ $k->facebook }}/" target="_blank">
                                                : {{ $k->facebook }}</a><br>
                                            <i class="bi bi-instagram"></i><a
                                                href="https://www.instagram.com/{{ $k->instagram }}/"
                                                target="_blank">
                                                : {{ $k->instagram }}</a><br>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->




    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('web/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('web/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('web/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('web/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('web/assets/js/main.js') }}"></script>

</body>

</html>

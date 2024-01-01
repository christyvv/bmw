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
                <a href="index.html" class="scrollto"><img style="margin-left: 100%"
                        src="{{ url('web/assets/img/bmw.png') }}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-right: 5%">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#speakers">Facilities</a></li>
                    <li><a class="nav-link scrollto" href="#hotels">News</a></li>
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
                            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ Storage::url('public/admin/' . $f->foto) }}" alt=""
                                    class="img-fluid rounded">
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
                            <div class="hotel rounded">
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

        <!-- GALLERY -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery">
            {{-- <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
            </div>

            @foreach ($galeri as $g)
            <div id="gallery" class="gallery custom-padding mx-auto">
                <div id="carouselGallery" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item ">
                            <img class="gallery-img position-relative img-fluid rounded" src="{{ Storage::url('public/admin/' . $g->foto) }}"
                                alt="">
                        </div>

                        <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach --}}
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                        @foreach ($galeri as $g)
                        <div class="swiper-slide">
                            <a href="#" class="gallery-lightbox">
                                <img src="{{ Storage::url('public/admin/' . $g->foto) }}" class="img-fluid" alt=""></a>
                                {{ $g->judul }}
                                <p>{{ $g->tanggal }}</p>
                            </div>
                            @endforeach
                        </div>
                <div class="swiper-pagination"></div>
            </div>
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
                                <address>{{ $k->alamat }}</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="bi bi-phone"></i>
                                <h3>Phone Number</h3>
                                <p><a href="#">{{ $k->notelp }}</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p><a href="#">{{ $k->email }}</a></p>
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
                                            <strong>Phone:</strong> {{ $k->notelp }}<br>
                                            <strong>Email:</strong> {{ $k->email }}<br>
                                            <strong>Facebook:</strong> {{ $k->facebook }}<br>
                                            <strong>Instagram:</strong> {{ $k->instagram }}<br>
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

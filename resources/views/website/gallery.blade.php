@extends('layouts.web')

@section('content')

<header id="header" class="d-flex align-items-center " style="background-color: #060c22eb">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <a href="index.html" class="scrollto"><img style="margin-left: 100%"
                    src="{{ url('web/assets/img/bmw.png') }}" alt="" title=""></a>
        </div>
<nav id="navbar" class="navbar order-last order-lg-0" style="margin-right: 5%">
    <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#speakers">Facilities</a></li>
        <li><a class="nav-link scrollto" href="#hotels">News</a></li>
        <li><a class="nav-link scrollto active" href="#gallery">Gallery</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->

<section id="gallery">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from the recent events</p>
        </div>
    </div>
    <div class="gallery-slider swiper">
        {{-- <h5 class="text-center">Photos</h5> --}}
        <div class="swiper-wrapper align-items-center">
            @foreach ($galeri as $g)
                <div class="swiper-slide">
                    <a href="{{ route('gallery') }}">
                        <a href="{{ Storage::url('public/admin/' . $g->video) }}" class="gallery-lightbox">
                            <video width="100%" height="auto" controls>
                                <source src="{{ Storage::url('public/admin/' . $g->video) }}" type="video/mp4">
                            </video></a>
                    
                    {{ $g->judul }}
                    <p>{{ $g->tanggal }}</p>
                </div>
            @endforeach
        </div>
</section>

@endsection

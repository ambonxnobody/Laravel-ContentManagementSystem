@extends('Guest.Layouts.Index')
@section('Pages')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="{{ asset('assets/img/gedung.jpg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-current="true"
                    aria-label="Slide 2">
                    <img class="img-fluid" src="{{ asset('assets/img/dhuha.jpg') }}" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="card-img" src="{{ asset('assets/img/gedung.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Selamat Datang di Website MI-MH
                                Gogourung</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">MI-MH Gogourung
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="card-img" src="{{ asset('assets/img/dhuha.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Sekolah Islami dengan Mata Pelajaran
                                dan Kegiatannya</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Islamic School
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-success mb-4"></i>
                        <h5 class="mb-3">Sejak Tahun</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1953</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-success mb-4"></i>
                        <h5 class="mb-3">Tenaga Pendidikan</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">18</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-success mb-4"></i>
                        <h5 class="mb-3">Jumlah Siswa</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">366</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('assets/img/gurus.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-success pe-3">Tentang Kita</h6>
                        <h1 class="display-6 mb-4">Visi <span class="text-success">Misi</span> beserta Tujuan MI-MH
                            Gogourung</h1>
                        <p>Visi : </p>
                        <p>"UNGGUL DALAM MUTU, TIDAK GAGAP TEHNOLOGI, TRAMPIL, BERBUDAYA LINGKUNGAN, BERDASAR PADA IMAN DAN
                            TAQWA SERTA BERAZAS AHLUSHUNAH WAL JAMAAH"</p>
                        <p>Misi : </p>
                        <p class="mb-4">....................</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="{{ asset('assets/img/kepalaportrait.jpeg') }}"
                                alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>Khoirunaniswah, S. Ag.</h6>
                                <small>Kepala Sekolah</small>
                            </div>
                        </div>
                        <a class="btn btn-success rounded-pill py-3 px-5" href="/about">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-success px-3">Kegiatan Kami</h6>
                <h1 class="display-6 mb-4">Kegiatan-Kegiatan di MI-MH Gogourung</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($posts as $post)
                    <div class="project-item border rounded h-100 p-4" data-dot="{{ $loop->iteration }}">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded" src="{{ asset('storage/' . $post->image) }}" alt="">
                            <a href="{{ asset('storage/' . $post->image) }}" data-lightbox="project"><i
                                    class="fa fa-eye fa-2x"></i></a>
                        </div>
                        <h6 class="text-center">{{ $post->title }}</h6>
                    </div>
                @endforeach
                {{-- <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                        <a href="{{ asset('assets/img/project-2.jpg') }}" data-lightbox="project"><i
                                class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Project End -->

    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-success px-3">Tenaga Pendidikan Kami</h6>
                <h1 class="display-6 mb-4">We Are A Creative Team For Your Dream Project</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4"
                            src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4"
                            src="{{ asset('assets/img/team-2.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4"
                            src="{{ asset('assets/img/team-3.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-success rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

    <!-- Service Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-success px-3">Services</h6>
                <h1 class="display-6 mb-4">We Focuse On Making The Best In All Sectors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                        <h4 class="mb-0">Web Design</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                        <h4 class="mb-0">App Development</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                        <h4 class="mb-0">SEO Optimization</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-4.jpg') }}" alt="">
                        <h4 class="mb-0">Social Marketing</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-5.jpg') }}" alt="">
                        <h4 class="mb-0">Email Marketing</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="{{ asset('assets/img/service-6.jpg') }}" alt="">
                        <h4 class="mb-0">PPC Advertising</h4>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service End -->
@endsection

@extends('Layout.header')

@section('title', 'Kampus Gratis')

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset('img/jamal.jpg') }} " alt="" class="img-fluid rounded-circle">
                <h1 class="text-light text-center"><a href="{{ url('/') }}">Jamaludin Hakim Harsoyo</a></h1>
                <h6 class="text-light text-center mt-4">Software Developers</h6>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/hakim.harsoyo" class="facebook" target="_blank"><i
                            class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/jamaludin_hakim/" class="instagram" target="_blank"><i
                            class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/Jamaludin21" class="google-plus" target="_blank"><i
                            class="bx bxl-github"></i></a>
                    <a href="https://www.linkedin.com/in/jamaludin-hakim-harsoyo-5a86a2240" class="linkedin"
                        target="_blank"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a></li>
                    <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>@yield('title')</h2>
                    <ol>
                        <li><a href={{ url('/') }}>Home</a></li>
                        <li>@yield('title')</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src={{ asset('img/portfolio/kg1.png') }} alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src={{ asset('img/portfolio/kg2.png') }} alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src={{ asset('img/portfolio/kg3.png') }} alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src={{ asset('img/portfolio/kg4.png') }} alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src={{ asset('img/portfolio/kg5.png') }} alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Mobile Development</li>
                                <li><strong>Client</strong>: PT Menara Indonesia</li>
                                <li><strong>Project date</strong>: 14 February 2022</li>
                                <li><strong>Project URL</strong>: <a href="#">-</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                                labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque
                                itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur
                                dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div> --}}
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->
</body>

@extends('Layout.footer')

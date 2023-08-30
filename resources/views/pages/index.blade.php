@extends('templates.index')

@section('contents')

<!-- header -->
<header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">BEM VINDOS A MAIOR FESTA DE 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

    <!-- end header-->


    <!-- navbar --> 
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Party LIVES
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/information">Sobre</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/artists">Lineup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/calendar">Calendário</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/plans">Pacotes</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    <!-- end navbar-->


    <!-- main --> 

        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Party LIVES Presents</small>

                        <h1 class="text-white mb-5">v4retz Party 2023</h1>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                10 - 12 de Novembro de 2023
                            </h5>
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                Arena Megashows, Bauru - São Paulo
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <!-- end main --> 
@endsection
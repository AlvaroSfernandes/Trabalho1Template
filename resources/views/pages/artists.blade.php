@extends('templates.index')
    
@section('contents')

<!--artists--> 

<section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Principais Atrações    </h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/joecalih-UmTZqmMvQcw-unsplash.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Nome:</strong>
                                    Coldplay
                                </p>

                                <p>
                                    <strong>Fundação:</strong>
                                    1996 - Inglaterra
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop Music
                                </p>

                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/abstral-official-bdlMO9z5yco-unsplash.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Nome:</strong>
                                    Mc Daniel 
                                </p>

                                <p>
                                    <strong>Data Nascimento:</strong>
                                    27 de Agosto de 1998
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Funk
                                </p>

                                <hr>
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="images/artists/soundtrap-rAT6FJ6wltE-unsplash.jpg"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    <strong>Nome:</strong>
                                    Alok
                                </p>

                                <p>
                                    <strong>Data de Nascimento:</strong>
                                    26 de Agosto de 1991
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Eletronica
                                </p>

                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <!-- end artists--> 
@endsection
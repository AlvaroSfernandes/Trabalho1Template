@extends('templates.index')

@section('contents')

<!-- calendar -->
<section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Calendario do Evento</h1>

                            <div class="table-responsive">
                                <table class="schedule-table table table-dark">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Day 1</th>

                                            <td class="table-background-image-wrap pop-background-image">
                                                <h3>Pop Night</h3>

                                                <p class="mb-2">01:00 PM</p>


                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #F3DCD4"></td>

                                            <td class="table-background-image-wrap rock-background-image">
                                                <h3>Funk Night</h3>

                                                <p class="mb-2">03:30 PM</p>


                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Day 2</th>

                                            <td style="background-color: #ECC9C7"></td>

                                            <td>
                                                <h3>DJ KVSH</h3>

                                                <p class="mb-2">00:30 - 6:30 PM</p>

                                            </td>

                                            <td style="background-color: #D9E3DA"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Day 3</th>

                                            <td class="table-background-image-wrap country-background-image">
                                                <h3>Eletronic Music</h3>

                                                <p class="mb-2">01:30 PM</p>


                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>

                                            <td>
                                                <h3>Funk Night</h3>

                                                <p class="mb-2">01:00 PM</p>

                                                <p>Mc Ryan SP</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- end calendar -->


@endsection
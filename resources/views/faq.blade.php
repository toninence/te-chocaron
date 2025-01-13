@extends('layouts.app')

@section('title', 'Acerca de nosotros')
@push('styles')
<link href="{{ asset('css/crear.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">Información de interés</h1>
            <p class="lead fw-normal text-light mb-0">Si tienes algun siniestro de tránsito, te dejamos información de interés.</p>
        </div>
        <div class="row gx-5">
            <div class="col-xl-8">
                <!-- FAQ Accordion 1-->
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Tuviste un Accidente de Tránsito?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos: Daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Tuviste Lesiones?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la Policía. Caso contrario, es indispensable que recibas atención médica a la brevedad(por más que consideres que sean golpes leves); así recibirás atención y tendrás constancia de haber pasado por una guardia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿Quién tuvo la culpa en un accidente?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card border-0 mt-xl-5">
                    <div class="card-body p-4 py-lg-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder text-dark">¿Tienes más preguntas?</div>
                                <p class="text-muted mb-4">
                                    <strong>Contáctanos por WhatsApp:</strong>
                                    <br />
                                    <a href="https://wa.me/5491133607120">+54 11 3360-7120</a>
                                </p>
                                <div class="h6 fw-bolder">Síguenos</div>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

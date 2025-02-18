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
                <!-- FAQ Accordion Servicio-->
                 <h2><strong>Sobre Nuestro Servicio</strong></h2>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Cómo funciona el servicio?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos; Tanto daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Qué tipos de accidentes cubren?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Accidentes automóbilisticos de cualquier tipo, mientras que haya un tercero acusable y se posean sus datos. Lo mismo aplica para peatones.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Qué requiero para empezar?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Se requiere; cédula, registro, seguro, tipo de daños (fotos), breve relato del incidente (fecha, hora, lugar - vehículo, lugar específico), denuncia de siniestro en el seguro, lesiones si las hay (adjuntar certificado).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ¿Cuánto tiempo llevará el proceso?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Accordion Costos y Pagos-->
                <h2><strong>Costos y Pagos</strong></h2>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOneSc"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSc" aria-expanded="true" aria-controls="collapseOneSc">
                                ¿Cuánto cuesta el servicio?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOneSc" aria-labelledby="headingOneSc" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos: Daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwoSc"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSc" aria-expanded="false" aria-controls="collapseTwoSc">
                            ¿Tengo que pagar si no gano el caso?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwoSc" aria-labelledby="headingTwoSc" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la Policía. Caso contrario, es indispensable que recibas atención médica a la brevedad(por más que consideres que sean golpes leves); así recibirás atención y tendrás constancia de haber pasado por una guardia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThreeSc"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSc" aria-expanded="false" aria-controls="collapseThreeSc">
                            ¿Cuánto puedo ganar con mi caso?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseThreeSc" aria-labelledby="headingThreeSc" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Accordion Proceso Legal-->
                <h2><strong>Proceso Legal</strong></h2>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOnePl"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnePl" aria-expanded="true" aria-controls="collapseOnePl">
                                ¿Qué pasa si ya hablé con mi aseguradora?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOnePl" aria-labelledby="headingOnePl" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos: Daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwoPl"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoPl" aria-expanded="false" aria-controls="collapseTwoPl">
                            ¿Qué hago si la otra parte no tiene seguro?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwoPl" aria-labelledby="headingTwoPl" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la Policía. Caso contrario, es indispensable que recibas atención médica a la brevedad(por más que consideres que sean golpes leves); así recibirás atención y tendrás constancia de haber pasado por una guardia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThreePl"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreePl" aria-expanded="false" aria-controls="collapseThreePl">
                            ¿Puedo tener compensación aunque haya tenido parte de la culpa?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseThreePl" aria-labelledby="headingThreePl" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFourPl"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourPl" aria-expanded="false" aria-controls="collapseFourPl">
                            ¿Qué pasa si ya firmé un acuerdo con mi seguro?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseFourPl" aria-labelledby="headingFourPl" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Accordion Privacidad y Seguridad-->
                <h2><strong>Privacidad y Seguridad</strong></h2>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOnePs"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnePs" aria-expanded="true" aria-controls="collapseOnePs">
                                ¿Qué hacen con mis datos personales?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOnePs" aria-labelledby="headingOnePs" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos: Daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwoPs"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoPs" aria-expanded="false" aria-controls="collapseTwoPs">
                            ¿Mis datos estarán seguros?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwoPs" aria-labelledby="headingTwoPs" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la Policía. Caso contrario, es indispensable que recibas atención médica a la brevedad(por más que consideres que sean golpes leves); así recibirás atención y tendrás constancia de haber pasado por una guardia.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ Accordion Otros-->
                <h2><strong>Otros</strong></h2>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="accordion-item" id="accordion-item-1">
                        <h3 class="accordion-header" id="headingOneOt"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneOt" aria-expanded="true" aria-controls="collapseOneOt">
                                ¿En qué zonas ofrecen el servicio?
                            </button></h3>
                        <div class="accordion-collapse collapse show" id="collapseOneOt" aria-labelledby="headingOneOt" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si conduciendo su vehículo (Auto, Moto, Bicicleta) como dueño o usuario del mismo sufre un accidente de tránsito por culpa de otro conductor (sea que conduzca auto, moto, ciclomotor, micro o colectivo) Ud. tendría derecho a la reparación integral de todos los daños sufridos: Daños físicos a su persona (lesiones) como materiales de su vehículo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="accordion-item-2">
                        <h3 class="accordion-header" id="headingTwoOt"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoOt" aria-expanded="false" aria-controls="collapseTwoOt">
                            ¿Atienden emergencias o accidentes recientes?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseTwoOt" aria-labelledby="headingTwoOt" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la Policía. Caso contrario, es indispensable que recibas atención médica a la brevedad(por más que consideres que sean golpes leves); así recibirás atención y tendrás constancia de haber pasado por una guardia.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThreeOt"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeOt" aria-expanded="false" aria-controls="collapseThreeOt">
                            ¿Qué pasa si no estoy seguro de que mi caso califica?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseThreeOt" aria-labelledby="headingThreeOt" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cada accidente tiene sus particularidades; por lo que te aconsejamos que nos consultes así te asesoramos SIN compromiso. Podrías reclamar una indemnización, No te quedes con las dudas!!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFourOt"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourOt" aria-expanded="false" aria-controls="collapseFourOt">
                            ¿Pueden ayudarme si no hablo español/inglés?</button></h3>
                        <div class="accordion-collapse collapse" id="collapseFourOt" aria-labelledby="headingFourOt" data-bs-parent="#accordionExample">
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

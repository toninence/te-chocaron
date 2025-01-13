@extends('layouts.app')

@section('title', 'Acerca de nosotros')
@push('styles')
<link href="{{ asset('css/crear.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
@section('content')
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Nuestra Misión</h1>
                    <p class="lead fw-normal text-light mb-4" style="text-align: justify; text-justify: distribute;">Ofrecerte un asesoramiento integral y sin complicaciones cuando te enfrentas a un accidente automovilístico. Queremos que te sientas respaldado y que no tengas que preocuparte por los detalles, mientras nosotros nos encargamos de todo el proceso.</p>
                    <!-- <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-principal" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/compromiso.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Compromiso con Nuestros Clientes</h2>
                <p class="lead fw-normal text-light mb-0" style="text-align: justify; text-justify: distribute;">Nuestro objetivo es ofrecerte un asesoramiento integral cuando enfrentas un accidente vehicular o de moto. Nos comprometemos a brindarte el apoyo necesario en cada paso del proceso, asegurando que te sientas respaldado y tranquilo. Con un equipo de expertos a tu disposición, trabajamos para que no tengas que preocuparte por los detalles legales y emocionales, permitiéndote enfocarte en tu recuperación y bienestar.</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/startup.jpg" alt="..." style="width: 100%; max-height: 392px; object-fit: cover;"/></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Nuestra Historia</h2>
                <p class="lead fw-normal text-light mb-0" style="text-align: justify; text-justify: distribute;">Desde nuestros inicios, hemos estado comprometidos a brindar un servicio excepcional a quienes enfrentan la difícil situación de un accidente. Nuestra experiencia y dedicación nos han permitido ayudar a miles de personas a navegar por el proceso legal y emocional.</p>
            </div>
        </div>
    </div>
</section>
<!-- About section three-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/adaptarse.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Crecimiento y Más Allá</h2>
                <p class="lead fw-normal text-light mb-0" style="text-align: justify; text-justify: distribute;">A medida que hemos crecido, también lo ha hecho nuestro compromiso con la excelencia. Nos esforzamos por mejorar continuamente nuestros servicios y adaptarnos a las necesidades de nuestros clientes, asegurando que siempre reciban el mejor apoyo posible.</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<!-- <section class="py-5 bg-principal">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Nuestro Equipo</h2>
            <p class="lead fw-normal text-light mb-5" style="text-align: justify; text-justify: distribute;">Contamos con un equipo de profesionales dedicados y apasionados, listos para brindarte el apoyo que necesitas. Cada miembro de nuestro equipo aporta su experiencia y conocimiento para garantizar que recibas el mejor asesoramiento en cada paso del camino.</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Ibbie Eckart</h5>
                    <div class="fst-italic text-light">Founder &amp; CEO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Arden Vasek</h5>
                    <div class="fst-italic text-light">CFO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Toribio Nerthus</h5>
                    <div class="fst-italic text-light">Operations Manager</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Malvina Cilla</h5>
                    <div class="fst-italic text-light">CTO</div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection

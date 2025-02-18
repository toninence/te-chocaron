@extends('layouts.app')

@section('title', 'Formulario de Reporte de Incidente Vehicular')

@section('content')
<header class="bg-header py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">¿Tuviste un accidente de tránsito? Nosotros te ayudamos.</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Asesoramiento legal <span style="color: #FFF; font-weight: bold;">SIN COSTO</span>. Resolvé tu reclamo con abogados especializados.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3 btn-palette" href="https://wa.me/{{ env('TELEFONO') }}" target="_blank">¡Solicitá tu asesoramiento por WhatsApp ahora!</a>
                        <p>O contactanos por correo en <a class="text-decoration-none email" href="mailto:info@te-chocaron.com.ar">info@te-chocaron.com.ar</a></p>

                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/6383278.jpg" alt="..." /></div>
        </div>
    </div>
</header>

<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">¿Por Qué Elegirnos?</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-speedometer"></i></div>
                        <h2 class="h5">Rapidez en la Solución</h2>
                        <p class="mb-0">Resolvemos tu caso de manera ágil y eficiente.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-shield-lock"></i></div>
                        <h2 class="h5">Transparencia</h2>
                        <p class="mb-0">Mantenemos una comunicación clara en todo momento.
                        </p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-check"></i></div>
                        <h2 class="h5">Experiencia</h2>
                        <p class="mb-0">Contamos con profesionales altamente capacitados en el área.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-feature bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                        <h2 class="h5">Asesoría Personalizada</h2>
                        <p class="mb-0">Te ofrecemos un servicio adaptado a tus necesidades específicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section-->
<!-- <div class="py-5 bg-principal">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Novedades y Consejos</h2>
                    <p class="lead fw-normal text-muted mb-5">Descubre qué hacer en caso de accidente y mantente informado sobre las últimas novedades del sector.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top img-top-card-size" src="images/2306.jpg" alt="..." style="object-fit: cover; height: 200px !important;" />
                    <div class="card-body bg-card p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Información</div>
                        <a class="text-decoration-none link-light stretched-link" href="/faq#headingOne">
                            <h5 class="card-title mb-3">¿Tuviste un accidente de tránsito?</h5>
                        </a>
                        <p class="card-text mb-0">Vea que hacer en caso de accidente de tránsito.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-card border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top img-top-card-size" src="images/64649.jpg" alt="..." style="object-fit: cover; height: 200px !important;" />
                    <div class="card-body bg-card p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                        <a class="text-decoration-none link-light stretched-link" href="/faq#headingTwo">
                            <h5 class="card-title mb-3">¿Tuviste lesiones?</h5>
                        </a>
                        <p class="card-text mb-0">En el caso de haber lesionados, te recomendamos que llames a una ambulancia y a la policía.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-card border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top img-top-card-size" src="images/6461675.jpg" alt="..." style="object-fit: cover; height: 200px !important;" />
                    <div class="card-body bg-card p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-light stretched-link" href="/faq#headingTwo">
                            <h5 class="card-title mb-3">¿Quién tuvo la culpa en un accidente?</h5>
                        </a>
                        <p class="card-text mb-0">Consulta con nosotros para cobrar una indemnización!</p>
                    <div class="card-footer p-4 pt-0 bg-card border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <!-- <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                    <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                    </div>
                    <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                </div>
            </div>
        </aside> -->
    </div>
</section>

@endsection

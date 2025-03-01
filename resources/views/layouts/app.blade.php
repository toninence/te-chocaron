<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="¿Tuviste un accidente de tránsito? Te asesoramos para resolver tu caso y obtener tu indemnización, sin costo inicial. Consulta gratis.">
    
    <!-- Meta Keywords (No es tan relevante, pero puede ayudar un poco) -->
    <meta name="keywords" content="accidente de tránsito, reclamo de seguro por accidente, indemnización por accidente de tráfico, abogado accidentes de tránsito, asesoramiento legal accidente, cómo reclamar indemnización por accidente, qué hacer después de un accidente, reclamar seguro por accidente de auto, abogados especialistas en accidentes, cómo cobrar indemnización por choque, ayuda legal para accidentes de tránsito, accidente de tránsito qué hacer, cómo demandar a un seguro, derechos del accidentado, 
    accidente como peatón, choque con moto qué hacer, cuánto tiempo tengo para reclamar un accidente, cuánto se cobra por un accidente de tránsito, abogado sin adelanto por accidente, cálculo de indemnización accidente de tránsito, demanda por accidente de tránsito, cómo actuar ante un siniestro vial, reclamo por daños y perjuicios accidente de tránsito, denuncia por accidente de auto, abogado gratis accidente de tránsito, cómo iniciar un reclamo ante la aseguradora, 
    abogado accidentes de tránsito Buenos Aires, reclamar indemnización accidente Argentina, estudio jurídico accidentes de tránsito Argentina, asesoramiento legal accidentes Córdoba, abogado especializado en siniestros viales Rosario, reclamo de seguro por choque Argentina, indemnización por accidente Mendoza, asesoría legal gratuita accidentes de tránsito Argentina, 
    qué hacer si me chocaron y el seguro no quiere pagar, me atropellaron como peatón, ¿puedo pedir indemnización?, cuál es el tiempo máximo para reclamar un accidente de tránsito, cuánto paga el seguro por un accidente en Argentina, abogado para reclamar daños por accidente de auto, cómo hacer una demanda por accidente de tránsito sin abogado, qué hacer si el responsable del accidente no tiene seguro">

    
    <!-- Meta Robots (Para indexación) -->
    <meta name="robots" content="index, follow">
    
    <!-- Meta Open Graph (Para compartir en redes sociales como Facebook) -->
    <meta property="og:title" content="Te Chocaron - Reclamos y Asesoramiento por Accidentes de Tránsito">
    <meta property="og:description" content="Te ayudamos a reclamar tu indemnización por accidentes de tránsito sin costo inicial. Descubre cómo podemos ayudarte.">
    <meta property="og:image" content="https://www.te-chocaron.com.ar/img/tu-imagen.jpg"> <!-- Reemplaza con la URL real de una imagen representativa -->
    <meta property="og:url" content="https://www.te-chocaron.com.ar">
    <meta property="og:type" content="website">

    <!-- Twitter Card (Para compartir en Twitter) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Te Chocaron - Reclamos y Asesoramiento por Accidentes de Tránsito">
    <meta name="twitter:description" content="¿Tuviste un accidente? Te ayudamos a reclamar tu indemnización sin costo inicial.">
    <meta name="twitter:image" content="https://www.te-chocaron.com.ar/img/tu-imagen.jpg">

    <meta name="author" content="" />
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/logostransparente2.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
    <style>
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            /* Asegura que sea redondo */
            padding: 15px;
            /* Ajusta el padding para que el ícono esté centrado */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            font-size: 24px;
            text-align: center;
            width: 60px;
            /* Ancho fijo */
            height: 60px;
            /* Alto fijo */
            display: flex;
            /* Usar flexbox para centrar el ícono */
            align-items: center;
            /* Centrar verticalmente */
            justify-content: center;
            /* Centrar horizontalmente */
        }

        .whatsapp-icon:hover {
            background-color: #128C7E;
        }
    </style>
</head>

<body class="d-flex flex-column h-100 bg-principal">
    <div class="d-flex flex-column" style="min-height: 100vh;">
        <main class="flex-shrink-0">
            @include('layouts.partials.nav')
            <!-- Header-->
            @include('layouts.partials.messages')
            <!-- Features section-->
            @yield('content')
            <!-- WhatsApp Floating Icon -->
            <a href="https://wa.me/{{ env('TELEFONO') }}" class="whatsapp-icon" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
        </main>
        <!-- Footer-->
        <footer class="bg-top-bot py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; te-chocaron 2024</div>
            </div>
            <div class="col-auto">
                <!-- Redes Sociales -->
                <a href="{{ env('INSTAGRAM') }}" target="_blank" class="text-white mx-2">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="{{ env('FACEBOOK') }}" target="_blank" class="text-white mx-2">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
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

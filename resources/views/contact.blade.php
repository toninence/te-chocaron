@extends('layouts.app')

@section('title', 'Acerca de nosotros')
@push('styles')
<link href="{{ asset('css/crear.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .contact-card {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    .contact-card:hover {
        transform: scale(1.05);
    }
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        font-size: 24px;
    }
</style>
@endpush

@section('content')
<section class="py-5">
    <div class="container px-5">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <div class="row gx-5 row-cols-1 row-cols-lg-2 py-5 justify-content-center">
        <a href="https://wa.me/{{ env('TELEFONO') }}" class="text-decoration-none" target="_blank">
            <div class="col mb-4">
                <div class="contact-card">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div class="h5 wa-title">WhatsApp</div>
                    <p class="text-muted mb-0">Comunícate con nosotros a través de WhatsApp al <br> <b>{{ env('TELEFONO_FORMATTED') }}</b></p>
                </div>
            </div>
        </a>
            <!-- Puedes agregar más tarjetas de contacto aquí -->
        </div>
        <!-- WhatsApp Floating Icon -->
        <a href="https://wa.me/{{ env('TELEFONO') }}" class="whatsapp-icon" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</section>
@endsection

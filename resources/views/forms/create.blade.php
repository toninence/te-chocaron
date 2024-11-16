@extends('layouts.app')

@section('title', 'Formulario de Reporte de Incidente Vehicular')
@push('styles')
<link href="{{ asset('css/crear.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-8 col-md-8">
        <div class="card card-shadow">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
            <div class="row px-2">
                <div class="col-lg-3 col-md-4 py-4">
                    <div class="border-0">
                        <div class="card-title">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="font-weight-bold"><i class="fas fa-bars me-2"></i>Formulario de Reporte de Incidente Vehicular</p>
                                </li>
                                <li class="list-group-item text-muted">Por favor, complete las siguientes secciones para proporcionar información detallada sobre el incidente.</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action active" data-section="1" role="button" onclick="showSection(1)">
                                    <i class="fas fa-car me-2"></i> Vehículo
                                </li>
                                <li class="list-group-item list-group-item-action" data-section="2" role="button" onclick="showSection(2)">
                                    <i class="far fa-user me-2"></i> Usuario
                                </li>
                                <li class="list-group-item list-group-item-action" data-section="3" role="button" onclick="showSection(3)">
                                    <i class="far fa-paper-plane me-2"></i> Finalizar
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 p-4 text-left bg-right-card">
                    <!-- <div class="border-0 p-3 bg-right-card" style="overflow-y: auto;"> -->
                    <!-- <div class="h-100" style="padding-bottom: 60px;"> -->
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="section1" class="form-section">
                            @include('forms.seccion1')
                        </div>
                        <div id="section2" class="form-section" style="display: none;">
                            @include('forms.seccion2')
                        </div>
                        <div id="section3" class="form-section" style="display: none;">
                            @include('forms.seccion3')
                        </div>
                    </form>
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function previewImages(event) {
        const imagePreviewsContainer = document.getElementById('imagePreviewsContainer');
        imagePreviewsContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas imágenes

        const files = event.target.files;
        if (files.length > 5) {
            alert("Puedes subir un máximo de 5 imágenes.");
            return; // Salir de la función si hay más de 5 imágenes
        }

        Array.from(files).forEach(file => {
            const imagePreview = document.createElement('img');
            imagePreview.src = URL.createObjectURL(file);
            imagePreview.alt = "Previsualización de la imagen";
            imagePreview.classList.add('img-thumbnail');
            imagePreview.style.width = '200px'; // Establecer un ancho fijo
            imagePreview.style.height = '200px'; // Mantener la proporción
            imagePreview.style.objectFit = 'contain'; // Cubrir el área del contenedor
            imagePreviewsContainer.appendChild(imagePreview);
        });
    }

    function showSection(sectionNumber) {
        // Ocultar todas las secciones
        const sections = document.querySelectorAll('.form-section');
        sections.forEach(section => {
            section.style.display = 'none';
        });

        // Mostrar la sección seleccionada
        document.getElementById('section' + sectionNumber).style.display = 'block';

        // Si se está mostrando la sección 3, actualizar la previsualización
        if (sectionNumber === 3) {
            updatePreview();
        }

        // Actualizar la sección actual
        currentSection = sectionNumber;

        // Remover la clase active de todos los elementos
        const items = document.querySelectorAll('.list-group-item');
        items.forEach(item => {
            item.classList.remove('active');
        });

        // Añadir la clase active al elemento correspondiente
        const activeItem = document.querySelector(`.list-group-item[data-section="${sectionNumber}"]`);
        if (activeItem) {
            activeItem.classList.add('active');
        }
    }

    function updatePreview() {
        const form = document.querySelector('form'); // Seleccionar el formulario
        const userPreviewContainer = document.getElementById('preview');
        const vehiclePreviewContainer = document.getElementById('vehiclePreview');
        const imagePreviewsContainer = document.getElementById('imagePreviewsContainerEnd');

        // Limpiar contenedores
        userPreviewContainer.innerHTML = '';
        vehiclePreviewContainer.innerHTML = '';
        imagePreviewsContainer.innerHTML = '';

        // Recorrer todos los elementos de entrada del formulario
        Array.from(form.elements).forEach(element => {
            // Excluir campos de tipo FILE y el campo _token
            if (element.name && (element.tagName === 'INPUT' || element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') && element.type !== 'file' && element.name !== '_token') {
                const value = element.value;

                // Diferenciar entre datos del usuario y del vehículo
                if (element.dataset.user) {
                    userPreviewContainer.innerHTML += `
                        <div class="col-md-12 row">
                            <p class="text-muted col-md-4 col-sm-12">${element.name.charAt(0).toUpperCase() + element.name.slice(1)}</p>
                            <p class="col-md-8 col-sm-12">${value}</p>
                        </div>
                    `;
                } else if (element.dataset.vehicle) {
                    vehiclePreviewContainer.innerHTML += `
                        <div class="col-md-12">
                            <p class="text-muted">${element.name.charAt(0).toUpperCase() + element.name.slice(1)}</p>
                            <p>${value}</p>
                        </div>
                    `;
                }
            }
        });

        // Mostrar las imágenes
        const files = document.getElementById('imagenes').files;
        Array.from(files).forEach(file => {
            const imagePreview = document.createElement('img');
            imagePreview.src = URL.createObjectURL(file);
            imagePreview.alt = "Previsualización de la imagen";
            imagePreview.classList.add('img-thumbnail');
            imagePreview.style.width = '200px'; // Establecer un ancho fijo
            imagePreview.style.height = '200px'; // Mantener la proporción
            imagePreview.style.objectFit = 'contain'; // Cubrir el área del contenedor
            // imagePreview.style.marginBottom = '10px'; // Agregar margen inferior
            imagePreviewsContainer.appendChild(imagePreview);
        });
    }
</script>

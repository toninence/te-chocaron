@extends('layouts.app')

@section('title', 'Formulario de Reporte de Incidente Vehicular')
@push('styles')
<link href="{{ asset('css/crear.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-8 col-md-8 ">
        <div class="card">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row col-lg-12 contact-form__wrapper p-5 order-lg-1 position-relative z-index-101">
                    <!-- Datos del vehiculo -->
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h3>Información del Vehículo</h3>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Toyota">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Yaris">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="fab-year">Año de fabricación</label>
                                <input type="text" class="form-control" id="fab-year" name="fab-year" placeholder="2024">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="imagenes">Imágenes del Vehículo (máximo 5)</label>
                                <input type="file" class="form-control" id="imagenes" name="imagenes[]" accept="image/*" multiple onchange="previewImages(event)">
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3" id="imagePreviewsContainer" style="display: flex; flex-wrap: wrap; gap: 10px;">
                            <!-- Aquí se mostrarán las imágenes previsualizadas -->
                        </div>
                    </div>
                    <!-- Datos persona -->
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <h3>Datos del Informante</h3>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Wendy">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Appleseed">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="wendy.apple@seed.com">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="(021)-454-545">
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="descripcion">Descripción del Incidente</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Hi there, I would like to....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3 mt-5 order-lg-3 align-self-end d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Enviar Datos</button>
                    </div>
                </div>
            </form>
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
            imagePreview.style.width = '100px'; // Establecer un ancho fijo
            imagePreview.style.height = 'auto'; // Mantener la proporción
            imagePreview.style.objectFit = 'cover'; // Cubrir el área del contenedor
            imagePreviewsContainer.appendChild(imagePreview);
        });
    }
</script>

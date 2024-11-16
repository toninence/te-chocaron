<div class="row h-100">
    <p class="card-title font-weight-bold">Formulario de Reporte de Incidente Vehicular</p>
    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Toyota" data-vehicle="true">
        </div>
    </div>
    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Yaris" data-vehicle="true">
        </div>
    </div>
    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="fab-year">Año de fabricación</label>
            <input type="text" class="form-control" id="fab-year" name="fab-year" placeholder="2024" data-vehicle="true">
        </div>
    </div>
    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="imagenes">Imágenes del Vehículo (máximo 5)</label>
            <input type="file" class="form-control" id="imagenes" name="imagenes[]" accept="image/*" multiple onchange="previewImages(event)" data-vehicle="true">
        </div>
    </div>
    <div class="col-sm-12 mb-3" id="imagePreviewsContainer" style="display: flex; flex-wrap: wrap; gap: 10px;">
        <!-- Aquí se mostrarán las imágenes previsualizadas -->
    </div>
    <div class="d-flex justify-content-between mt-3 position-relative bottom-0 right-personalizado">
        <div></div>
        <div>
            <button type="button" class="btn btn-dark" onclick="showSection(2)">Continuar</button>
        </div>
    </div>
</div>

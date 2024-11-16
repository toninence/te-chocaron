<div class="row">
    <div class="col-12">
        <p class="text-muted">Por favor, revise cuidadosamente los datos ingresados y verifique que las imágenes adjuntas se visualicen correctamente antes de enviar el formulario. Una vez confirmada la información, puede proceder con el envío.</p>
    </div>
    <div class="col-md-12 col-lg-6">
        <h5 class="font-weight-bold">Datos del Informante</h5>
        <div class="mb-3 row" id="preview" data-user="true"></div>
    </div>

    <div class="col-md-12 col-lg-6">
        <h5 class="font-weight-bold">Datos del Vehículo</h5>
        <div class="mb-1 row" id="vehiclePreview" data-vehicle="true"></div>

    </div>
    <div class="col-12">
        <h5 class="font-weight-bold">Imágenes del Vehículo</h5>
        <div id="imagePreviewsContainerEnd" style="display: flex; flex-wrap: wrap; gap: 10px;"></div>
    </div>

    <div class="d-flex justify-content-between mt-3 position-relative bottom-0 right-personalizado">
        <div></div>
        <div>
            <button type="button" class="btn btn-light" onclick="showSection(2)">Cancelar</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">Enviar Datos</button>
        </div>
    </div>
    <!-- Modal de Confirmación -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro de que desea enviar el formulario? </p>
                    <p class="text-muted">Recibirá un correo con su número de solicitud y nos estaremos contactando a la brevedad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="confirmSubmit">Enviar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.getElementById('confirmSubmit').addEventListener('click', function() {
        // Aquí puedes agregar la lógica para enviar el formulario
        document.querySelector('form').submit(); // Envía el formulario
    });
</script>

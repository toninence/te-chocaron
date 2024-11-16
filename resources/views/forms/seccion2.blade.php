<div class="row h-100">
    <p class="card-title font-weight-bold">Datos del Informante</p>
    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label class="required-field" for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Wendy" data-user="true">
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Appleseed" data-user="true">
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label class="required-field" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="wendy.apple@seed.com" data-user="true">
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="(021)-454-545" data-user="true">
        </div>
    </div>

    <div class="col-sm-12 mb-40">
        <div class="form-group">
            <label class="required-field" for="descripcion">Descripción del Incidente</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Hi there, I would like to....." data-user="true"></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-3 position-relative bottom-0 right-personalizado">
        <div></div>
        <div>
            <button type="button" class="btn btn-light" onclick="showSection(1)">Cancelar</button>
            <button type="button" class="btn btn-dark" onclick="showSection(3)">Continuar</button>
        </div>
    </div>
</div>

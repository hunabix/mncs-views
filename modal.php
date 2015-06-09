

<!-- Modal -->
<div class="modal fade" id="lead-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Agregar nota personalizada
                </h4>
            </div>
            <!-- Cuerpo del modal  -->
            <div class="modal-body">

                <!-- Campo para saber si el formulario fué enviado -->
        <input type="hidden" name="form-name" value="leads-form">

                <div class="input-group">
                   <input name="id" type="text" id="id" class="form-control"  placeholder="ID" value="">
                   <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>

                <div class="input-group">
                   <input name="nombre" type="text" id="nombre" class="form-control"  placeholder="nombre" value="">
                   <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>

            </div>
            <!-- Pié del modal  -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
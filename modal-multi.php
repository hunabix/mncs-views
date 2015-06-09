

<!-- Modal -->
<div class="modal fade" id="modal-multi" tabindex="-1" role="dialog" aria-labelledby="titulo-modal-regular" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Encabezado del modal  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="titulo-modal-regular">
                    
                </h4>
            </div>
            <!-- Cuerpo del modal  -->
            <div class="modal-body">

                <!-- ID del elemento -->
                <input id="lead-id" type="hidden" name="lead-id" value="">
                <input id="tipo-accion" type="hidden" name="tipo-accion" value="">
             
                <div class="input-group">
                   <input name="comentario" type="text-area" id="comentario" class="form-control"  placeholder="Comentario" value="">
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
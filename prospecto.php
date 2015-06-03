
<!-- Prospecto -->

<div id="lead-<?= $i; ?>" class="lead">

    <!-- Checkbox & Nombre -->
    <div class="checkbox" for="checkbox-<?= $i; ?>">
        <!-- check -->
        <label class="name">
        <input name="checkbox-<?= $i; ?>" id="checkbox-<?= $i; ?>" value="1" type="checkbox" class="check" form="mag-form">
        <!-- Nombre -->
        Alejandro Sobrevilla Viveros <?= $i; ?></label>
    </div>
    <!-- Estatus actual -->
    <p class="status">
        <span class="date-status">13 feb</span>
        Se ha enviado el correo de inicio de cursos
    </p>
    <!-- Recordatorio y sugerencia -->
    <p class="reminder">
        <span class="date-reminder">18 feb</span>
        enviar correo de seguimiento
    </p>
    <!-- Acciones -->
    <aside class="actions">
        <!-- Enviar correo -->
        <a href="#" class="action" ><i class="fa fa-send"></i></a>
        <!-- Realizar llamada -->
        <a href="#" class="action"><i class="fa fa-phone"></i></a>
        <!-- Agregar nota personalizada -->
        <a href="#" class="action"><i class="fa fa-file-text"></i></a>
        <!-- Inscripción a Musinetwork -->
        <a href="#" class="action"><i class="fa fa-university"></i></a>
        <!-- Reservar para futuros ciclos -->
        <a href="#" class="action"><i class="fa fa-recycle"></i></a>
        <!-- Enviar a lista general -->
        <a href="#" class="action"><i class="fa fa-list"></i></a>
        <!-- Agregar recordatorio -->
        <a href="#" class="action"><i class="fa fa-calendar"></i></a>
        <!-- Editar datos del prospecto -->
        <a href="#" class="action a-user"><i class="fa fa-user"></i></a>
        <!-- Consultar historial -->
        <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
        <!-- Eliminar prospecto -->
        <a href="#" class="action a-close"><i class="fa fa-close"></i></a>
        <!-- Cambiar prioridad -->
        <a href="#" class="action"><i class="fa fa-circle"></i></a>
    </aside>
</div>

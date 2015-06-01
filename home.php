<?php 
/**
 * Plantilla [home]
 **/
require_once("header.php"); ?>

<!-- Titulo -->
<h2 class="section-title">Casos de seguimiento</h2>

<!-- Casos de seguimiento -->
<section class="monitoring">
    
    <!-- Acciones y recordatorios en lote : mag-form = monitoring action group form-->
    <form action="process.php" name="mag-form" id="mag-form" class="mag-form form-group form" method="post">
        
        <!-- Bandera para saber si el formulario fué enviado -->
        <input type="hidden" name="form-name" value="mag-form">

        <!-- Lista de acciones : col 1 -->        
        <div class="dropdown action-list">
            <button name="action-list" id="action-list" class="btn dropdown-toggle btn-primary" type="button" data-toggle="dropdown">
                Acciones en grupo
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            </ul>
        </div>    
        <!-- Selector de fecha : col 2-->
        <div class="input-group mag-date">
           <input name="mag-date" type="text" id="mag-date" class="form-control"  placeholder="dd/mm/aaaa" value="">
           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
        <!-- Recordatorio o sugerencia : col 3-->
        <div class="input-group mag-reminder">
            <input name="mag-reminder" type="text" id="mag-reminder" class="form-control" placeholder="Recordatorio" />
            <span class="input-group-addon"><i class="fa fa-file-o"></i></span>
        </div>
            <!-- Botón aplicar recordatorio col: 4 -->  
        <div class="input-group mag-reminder-btn">         
            <button type="submit" name="mag-reminder-btn" class="btn btn-primary btn-fill">Programar</button>
        </div>
    </form>


    <!-- Lista de prospectos -->
    <section id="leads" class="leads">
        <!-- Encabezado -->
        <header class="titles">
            <h4 class="lt-name">Interesado</h4>
            <h4 class="lt-status">Estado actual</h4>
            <h4 class="lt-reminder">Recordatorio</h4>
            <h4 class="lt-actions">Acciones</h4>
        </header>

        <!-- Prospecto -->
        <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox1">
                <!-- check -->
                <input name="checkbox1" id="checkbox1" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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

        <!-- Repetidos /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox2">
                <!-- check -->
                <input name="checkbox2" id="checkbox2" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox3">
                <!-- check -->
                <input name="checkbox3" id="checkbox3" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox4">
                <!-- check -->
                <input name="checkbox4" id="checkbox4" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox5">
                <!-- check -->
                <input name="checkbox5" id="checkbox5" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox6">
                <!-- check -->
                <input name="checkbox6" id="checkbox6" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox7">
                <!-- check -->
                <input name="checkbox7" id="checkbox7" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
                <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck" for="checkbox8">
                <!-- check -->
                <input name="checkbox8" id="checkbox8" value="1" type="checkbox" class="check" form="mag-form">
                <!-- Nombre -->
                <p class="name">Alejandro Sobrevilla Viveros</p>
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
        <!-- Repetidos /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    </section>

</section>
    

<?php 
require_once("footer.php"); ?>    


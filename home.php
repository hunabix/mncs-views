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
    <form action="" name="mag-form" id="mag-form" class="mag-form form-group form">
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
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
                <a href="#" class="action"><i class="fa fa-user"></i></a>
                <!-- Consultar historial -->
                <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
                <!-- Eliminar prospecto -->
                <a href="#" class="action"><i class="fa fa-close"></i></a>
                <!-- Cambiar prioridad -->
                <a href="#" class="action"><i class="fa fa-circle"></i></a>
            </aside>
        </div>
               <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
                <a href="#" class="action"><i class="fa fa-user"></i></a>
                <!-- Consultar historial -->
                <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
                <!-- Eliminar prospecto -->
                <a href="#" class="action"><i class="fa fa-close"></i></a>
                <!-- Cambiar prioridad -->
                <a href="#" class="action"><i class="fa fa-circle"></i></a>
            </aside>
        </div>
               <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
                <a href="#" class="action"><i class="fa fa-user"></i></a>
                <!-- Consultar historial -->
                <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
                <!-- Eliminar prospecto -->
                <a href="#" class="action"><i class="fa fa-close"></i></a>
                <!-- Cambiar prioridad -->
                <a href="#" class="action"><i class="fa fa-circle"></i></a>
            </aside>
        </div>
               <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
                <a href="#" class="action"><i class="fa fa-user"></i></a>
                <!-- Consultar historial -->
                <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
                <!-- Eliminar prospecto -->
                <a href="#" class="action"><i class="fa fa-close"></i></a>
                <!-- Cambiar prioridad -->
                <a href="#" class="action"><i class="fa fa-circle"></i></a>
            </aside>
        </div>
               <div id="" class="lead">

            <!-- Checkbox & Nombre -->
            <div class="lcheck">
                <!-- check -->
                <input name="" value="" type="checkbox" class="check" form="mag-form">
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
                <a href="#" class="action"><i class="fa fa-user"></i></a>
                <!-- Consultar historial -->
                <a href="#" class="action"><i class="fa fa-clock-o"></i></a>
                <!-- Eliminar prospecto -->
                <a href="#" class="action"><i class="fa fa-close"></i></a>
                <!-- Cambiar prioridad -->
                <a href="#" class="action"><i class="fa fa-circle"></i></a>
            </aside>
        </div>
        <!-- Repetidos /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    </section>

</section>
    
    
<?php 
require_once("footer.php"); ?>    


<?php
/**
 * Plantilla [home]
 **/
require_once("header.php"); ?>

<!-- Titulo -->
<h2 class="section-title">Casos de seguimiento</h2>

<!-- Casos de seguimiento -->
<section class="monitoring">

    <!-- Formulario de acciones y recordatorios en lote
        mag-form = monitoring action group form-->
    <?php require_once("mag-form.php");  ?>


    <!-- Lista de prospectos -->
    <section id="leads" class="leads">
        <!-- Encabezado -->
        <header class="titles">
            <h4 class="lt-name">
                <!-- Botón para deseleccionar todos los checkboxes -->
                <a href="" id="uncheck-all" class="uncheck-all">
                    <i class="fa fa-minus-square-o "></i>
                </a> Interesado
            </h4>
            <h4 class="lt-status">Estado actual</h4>
            <h4 class="lt-reminder">Recordatorio</h4>
            <h4 class="lt-actions">Acciones</h4>
        </header>

        <!-- Lista de prospectos -->

        <?php for ($i = 1; $i <= 10; $i++) { ?>

            <?php require("prospecto.php");  ?>

        <?php } ?>


    </section>

</section>


<?php
require_once("footer.php"); ?>


/* MAG-FORM
--------------------------------------------- */

// Activo datepicker para el campo en mag-form
$('#mag-date').datepicker({
    weekStart:1,
    color: 'red'
});


/* LEADS
--------------------------------------------- */
// Muestra los iconos correspondientes al cargar o recargar la página
$("input:checked + .check-icon").addClass('fa-check-square-o');
$("input:checked + .check-icon").removeClass('fa-square-o');
$("input:not(:checked) + .check-icon").addClass('fa-square-o');
$("input:not(:checked) + .check-icon").removeClass('fa-check-square-o');

// Activo script para multiple selección de checkboxs en #leads
$(function() {
    $('#leads').tshift();
});

// Script del boton para deseleccionar todos los checkboxs de #leads
$( "#uncheck-all" ).click(function( event ) {
    event.preventDefault();
    $('.check').prop('checked', false); // Unchecks it
    $("input:not(:checked) + .check-icon").addClass('fa-square-o');
    $("input:not(:checked) + .check-icon").removeClass('fa-check-square-o');
});


/* GENERAL
------------------------------- */
// Script que cambia el icono de los checkbox seleccionados o deseleccionados
$('input[type=checkbox]').change(function(){
    $("input:checked + .check-icon").addClass('fa-check-square-o');
    $("input:checked + .check-icon").removeClass('fa-square-o');
    $("input:not(:checked) + .check-icon").addClass('fa-square-o');
    $("input:not(:checked) + .check-icon").removeClass('fa-check-square-o');
});


/* Acciones del lead
------------------------------- */
// Obtengo el ID del lead
$( ".nota" ).click(function() {


    var leadId = $(this).attr('id');
    var leadTipoAccion = $(this).attr('tipo-accion');

    var modal = $('#modal-multi');

    modal.find( "#lead-id" ).val( leadId );
    modal.find( "#tipo-accion" ).val( leadTipoAccion );
    modal.find( "#titulo-modal-regular").html('Agregar nota personalizada');

});



/* AJAX
------------------------------- */

$( document ).ajaxStart(function() {
    $( ".loading" ).css( "display", "block" );              
});
$( document ).ajaxComplete(function() {
    $( ".loading" ).css( "display", "none" );                   
});


$("#formulario").on("submit", function(e){
    e.preventDefault();

    $.post("process.php", $("#formulario").serialize(), function (respuesta) {
        $('#contenido .datos').html(respuesta);
        $('.contenido').css( "display", "block" ); 
        $('#myModal').modal('toggle');
    })
});






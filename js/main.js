
/* MAG-FORM
--------------------------------------------- */

// Activo datepicker para el campo en mag-form
$('#mag-date').datepicker({
    weekStart:1,
    color: 'red'
});


/* LEADS
--------------------------------------------- */

// Activo script para multiple selección de checkboxs en #leads
$(function() {
    $('#leads').tshift();
});
// Script del boton para deseleccionar todos los checkboxs de #leads
$( "#uncheck-all" ).click(function( event ) {
    event.preventDefault();
    $('.lead-check').prop('checked', false); // Unchecks it
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

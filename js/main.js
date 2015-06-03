$(document).ready(function() {


    // Activa los fancy checkbox de Creative Tim
    $(':checkbox').checkbox();

    // Función que pemite marcar multiples checkbox usando shift
    var lastChecked = null;
    var $chkboxes = $('.checkbox');
    $chkboxes.click(function(e) {
        if(!lastChecked) {
            lastChecked = this;
            return;
        }

        if(e.shiftKey) {
            var start = $chkboxes.index(this);
            var end = $chkboxes.index(lastChecked);

            $chkboxes.slice(Math.min(start,end), Math.max(start,end)+ 1).addClass('checked', lastChecked.checked);
        }
        lastChecked = this;
    });

    // Selecciona los checkboxes que tienen la clase checked
    $( "#mag-form" ).submit(function( event ) {
      $('.checked .check').attr('checked', true);
    }); 

    $( "#uncheck-all" ).click(function() {
      $(':checkbox').checkbox('uncheck');
    });


});        





  


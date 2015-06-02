
$(':checkbox').checkbox();

// Función que pemite marcar multiples checkbox usando s
var lastChecked = null;

$(document).ready(function() {
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

            // if ($chkboxes.hasClass('checked')){
            //    console.log('Si');
            //    $('.checked').addClass('hola');
            //    $('.check').addClass('hola');
            //    $('.check').prop( "checked" );

            // } else {
            //     console.log('No'); 
            // }
        }

        lastChecked = this;



    });
});        

$('.checkbox').on( "click", function() {
    $( this ).toggleClass('hola');

    
});




// var lastChecked = null;

// $(document).ready(function() {
//     var $chkboxes = $('.check');
//     $chkboxes.click(function(e) {
//         if(!lastChecked) {
//             lastChecked = this;
//             return;
//         }

//         if(e.shiftKey) {
//             var start = $chkboxes.index(this);
//             var end = $chkboxes.index(lastChecked);

//             $chkboxes.slice(Math.min(start,end), Math.max(start,end)+ 1).prop('checked', lastChecked.checked);

//         }

//         lastChecked = this;
//     });
// });    


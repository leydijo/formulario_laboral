var name = $("#name").val();


$('#next').on("click", function (e){
    e.preventDefault();
    $('#principal').addClass("hidden");
    $('.mainContainer').removeClass("hidden");
});

// (function(){
//     $('#formulario').validate({
//         submitHandler: function(form) {
//             $(form).ajaxSubmit({
//                 url: 'send.php',
//                 success: function() {
                    
                    
//                     $('#formulario').hide();
//                     $('#tprincipal').append("<p class='thanks'>Gracias por contactar con nosotros.</p>")
//                 }
//             });
//         }
//     });         
// });
$(document).ready(function (){
    //alert("funciona jquery");
    $("#boton1").on ("click", function(){
        $("#texto1").html("Brunetteeeeeeeeeee")
    });

    $("#texto1").hover (function (){
        $(this).css("background-color", "pink");
        $(this).css("font-size", "50px");
    }, function () {
        $(this).css("background-color", "blue");
        $(this).css("font-size", "20px");

    });
    
    $("#boton2").click(funtion (e) {
        $("#imagen1").fadeToggle("slow");

   

     });

    
   

});
$(document). ready(function(){
    $("#boton1").click(function (e){
        alert("Evento click boton1")
    });

    $("#div1").on("dblclick", function (){
        alert("Evento doble cick")
    });

    $("#input1").focus(function (){
        console.log("Evento doble cick")
    });

    $("#texto1").hover(function (){
       $("#texto1").css("background-color","pink");
    }, function (){
       $("#texto1").css("background-color","blue");
    }); 

    $("#input2").keydown( function (e){
        console.log("Key Down")
        $("#input2").css("background-color","pink");
    });

    

       
       
    });



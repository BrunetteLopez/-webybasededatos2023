$(document).ready(function (){
  var palabra="";
  var rand;
  const listaPalabras = ['codigo', 'link', 'programacion', 'aplicaciones', 'javascript'];
  $("#boton1").click(function(e){
    rand = (Math.random() * 5).toFixed(0);
    palabra = listapalabras[rand][0].toUpperCase();
    console.log(palabra);
  });
});
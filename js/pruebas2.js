$(document).ready(function(){
   $("#myBtnCarga").click(function(){
      var hClinica = $("#hClinica").val();
      if(hClinica==""||Number.isNaN(hClinica)||hClinica.length>=8||/^\s+$/.test(hClinica)){
         $("#hClinicaRta").addClass("#incorrecto");
         $("#hClinicaRta").html("Datos Incorrectos");
         }else{
           $("#hClinicaRta").addClass("#correcto");
           $("hClinicaRta").html("Campo Válido");
         }   
var fIngreso = $("#fIngreso").val();
   if(fIngreso==""||Number.isNaN(fIngreso)||fIngreso.length<7||/^\s+$/.test(fIngreso)){
      $("#fIngresoRta").addClass("#incorrecto");
      $("#fIngresoRta").html("Datos incorrectos");
         }else{
            $("#fIngresoRta").addClass("#correcto");
            $("fIngresoRta").html("Campo Válido");
         }
var nCompleto = $("#nCompleto").val();
   if(nCompleto==""||nCompleto.length>=25||/^\s+$/.test(nCompleto)){
      $("#nCompletoRta").addClass("incorrecto");
      $("#nCompletoRta").html("Datos incorrectos");
         }else{
            $("#nCompletoRta").addClass("correcto");
            $("#nCompletoRta").html("Campo Válido");
         }
var sala = $("#sala").val();
   if(==""||.length>=25||/^\s+$/.test()){
      $("#nCompletoRta").addClass("incorrecto");
      $("#nCompletoRta").html("Datos incorrectos");
         }else{
            $("#nCompletoRta").addClass("correcto");
            $("#nCompletoRta").html("Campo Válido");
         }
var cama = $("#cama").val(); 
   if(cama==""||cama.length>=25||/^\s+$/.test(cama)){
      $("#camaRta").addClass("incorrecto");
      $("#camaRta").html("Datos incorrectos");
         }else{
            $("#camaRta").addClass("correcto");
            $("#camaRta").html("Campo Válido");
         }
var sexo = $("#sexo").val(); /*BD*/
   if(==""||.length>=25||/^\s+$/.test()){
      $("#").addClass("incorrecto");
      $("#").html("Datos incorrectos");
         }else{
            $("#").addClass("correcto");
            $("#").html("Campo Válido");
         }
var edad = $("#edad").val(); /*BD*/
   if(==""||.length>=25||/^\s+$/.test()){
      $("#").addClass("incorrecto");
      $("#").html("Datos incorrectos");
         }else{
            $("#").addClass("correcto");
            $("#").html("Campo Válido");
         }
var accidente = $("#tAccidente").val();
   if(==""||.length>=25||/^\s+$/.test()){
      $("#").addClass("incorrecto");
      $("#").html("Datos incorrectos");
         }else{
            $("#").addClass("correcto");
            $("#").html("Campo Válido");
         }
var cie10 = $("#cie10").val();
   if(==""||.length>=25||/^\s+$/.test()){
      $("#").addClass("incorrecto");
      $("#").html("Datos incorrectos");
         }else{
            $("#").addClass("correcto");
            $("#").html("Campo Válido");
         }
var barrio = $("#barrio").val();
   if(==""||.length>=25||/^\s+$/.test()){
      $("#").addClass("incorrecto");
      $("#").html("Datos incorrectos");
         }else{
            $("#").addClass("correcto");
            $("#").html("Campo Válido");
         }
var medico = $("#medico").val();
   if(medico==""||medico.length>=25||/^\s+$/.test(medico)){ 
      $("#medicoRta").addClass("incorrecto");
      $("#medicoRta").html("Datos Incorrectos");
         }else{
            $("#medicoRta").addClass("correcto");
            $("#medicoRta").html("Campo Válido");
         }
var cPracticada = $("#cPracticada").val();
   if(cPracticada==""||cPracticada.length>=25||/^\s+$/.test(cPracticada)){
      $("#cPracticadaRta").addClass("incorrecto");
      $("#cPracticadaRta").html("Datos Incorrectos");
         }else{
            $("#cPracticadaRta").addClass("correcto");
            $("#cPracticadaRta").html("Campo Válido");
         }
var diagnostico = $("#diagnostico").val();
   if(diagnostico==""||diagnostico.length>=25||/^\s+$/.test(diagnostico)){
      $("#diagnosticoRta").addClass("incorrecto");
      $("#diagnosticoRta").html("Datos Incorrectos");
         }else{
            $("#diagnosticoRta").addClass("correcto");
            $("#diagnosticoRta").html("Campo Válido");
         }
var fAlta = $("#fAlta").val();
   if(fAlta==""||fAlta.length>=25||/^\s+$/.test(fAlta)){
      $("#fAltaRta").addClass("incorrecto");
      $("#fAltaRta").html("Datos Incorrectos");
         }else{
            $("#fAltaRta").addClass("correcto");
            $("#fALtaRta").html("Campo Válido");
         }
var cEgreso = $("#cEgreso").val();
   if(cEgreso==""||cEgreso.length>=25||/^\s+$/.test(CEgreso)){ 
      $("#cEgresoRta").addClass("incorrecto");
      $("#cEgresoRta").html("Datos Incorrectos");
         }else{
            $("#cEgresoRta").addClass("correcto");
            $("#cEgresoRta").html("Campo Válido");
         }

$.ajax({
   url : 'login.php',
   data : {},
   type : 'POST',
   dataType : 'text',

   success : function(data) {
      },
   error : function(xhr, status) {
        alert('Disculpe, existió un problema');
      },
   complete : function(xhr, status) {
        alert('Petición realizada');
      }
      });
   });
});
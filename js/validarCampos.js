$(document).ready(function(){
  cargarOpcionesSelect();

  $("#myBtnCarga").click(function(e){
      e.preventDefault();

     var hClinica = $("#hClinica").val();
     if(hClinica==""||Number.isNaN(hClinica)||hClinica.length>=8||/^\s+$/.test(hClinica)){
        $("#hClinicaRta").addClass("incorrecto");
        $("#hClinicaRta").html("Datos Incorrectos");
        }else{
          $("#hClinicaRta").addClass("correcto");
          $("#hClinicaRta").html("Campo Válido");
        }  

var fIngreso = $("#fIngreso").val();
  if(fIngreso==""||/^\s+$/.test(fIngreso)){
     $("#fIngresoRta").addClass("incorrecto");
     $("#fIngresoRta").html("Datos incorrectos");
        }else{
           $("#fIngresoRta").addClass("correcto");
           $("#fIngresoRta").html("Campo Válido");
        }
        
var nCompleto = $("#nCompleto").val();
  if(nCompleto==""||nCompleto.length>=25||/^\s+$/.test(nCompleto)){
     $("#nCompletoRta").addClass("incorrecto");
     $("#nCompletoRta").html("Datos incorrectos");
        }else{
           $("#nCompletoRta").addClass("correcto");
           $("#nCompletoRta").html("Campo Válido");
        }

if($("#sala").val().trim() === '') {
  $("#salaRta").addClass("incorrecto");
  $("#salaRta").html("Datos Incorrectos");
    }else{
      $("#salaRta").addClass("correcto");
      $("#salaRta").html("Campo Válido");
    }  
 
if ($("#cama").val().trim() === '') {
  $("#camaRta").addClass("incorrecto");
  $("#camaRta").html("Datos Incorrectos");
    }else{
      $("#camaRta").addClass("correcto");
      $("#camaRta").html("Campo Válido");
    }            

if($("#sexo").val().trim() === '') {
  $("#sexoRta").addClass("incorrecto");
  $("#sexoRta").html("Datos Incorrectos");
    }else{
      $("#sexoRta").addClass("correcto");
      $("#sexoRta").html("Campo Válido");
    }  

var edad = $("#edad").val();
  if(edad===""||edad.length>=3||/^\s+$/.test(edad)){
     $("#edadRta").addClass("incorrecto");
     $("#edadRta").html("Datos incorrectos");
        }else{
           $("#edadRta").addClass("correcto");
           $("#edadRta").html("Campo Válido");
        }

/*var accidente = $("#tAccidente").val();
  if(accidente==""||accidente.length>=25||/^\s+$/.test(accidente)){
     $("#tAccidenteRta").addClass("incorrecto");
     $("#tAccidenteRta").html("Datos incorrectos");
        }else{
           $("#tAccidenteRta").addClass("correcto");
           $("#tAccidenteRta").html("Campo Válido");
        }*/

/**
 * esta condición me permite preguntar si existe el objeto.
 * en este caso el input de cie-10
 */
if($("#cie10").length){  
  $("#cie10Rta").addClass("correcto");
  $("#cie10Rta").html("Campo Válido");  
}else{
  $("#cie10Rta").addClass("incorrecto");
  $("#cie10Rta").html("Elegir Cie-10");
}

if($("#barrio").length){
  $("#barrioRta").addClass("correcto");
  $("#barrioRta").html("Campo Válido");  
    } else {
      $("#barrioRta").addClass("incorrecto");
      $("#barrioRta").html("Datos Incorrectos");
    }

var medico = $("#medico").val();
  if(medico>=-1||/^\s+$/.test(medico)){ 
     $("#medicoRta").addClass("incorrecto");
     $("#medicoRta").html("Datos Incorrectos");
        } else {
           $("#medicoRta").addClass("correcto");
           $("#medicoRta").html("Campo Válido");
        }

if ($("#cie100").length) {
$("#cie100Rta").addClass("correcto");
$("#cie100Rta").html("Campo Válido");
  } else {
    $("#cie100Rta").addClass("incorrecto");
    $("#cie100Rta").html("Elegir Cie-10");
  }   

if ($("#cie1000").length) {
  $("#cie1000Rta").addClass("correcto");
  $("#cie1000Rta").html("Campo Válido");
    } else {
      $("#cie1000Rta").addClass("incorrecto");
      $("#cie1000Rta").html("Elegir Cie-10");
    }        
     
var diagnostico = $("#diagnostico").val();
  if(diagnostico==''||/^\s+$/.test(diagnostico)){
    $("#diagnosticoRta").addClass("incorrecto");
    $("#diagnosticoRta").html("Datos Incorrectos");
      }else{
        $("#diagnosticoRta").addClass("correcto");
        $("#diagnosticoRta").html("Campo Válido");
      }

var fAlta = $("#fAlta").val();
  if(fAlta.length>0){
    $("#fAltaRta").addClass("correcto");
    $("#fALtaRta").html("Campo Válido");
      }else{
        $("#fAltaRta").addClass("incorrecto");
        $("#fAltaRta").html("Datos Incorrectos");
      }

if($("#cEgreso").val().trim() === '') {
  $("#cEgresoRta").addClass("incorrecto");
  $("#cEgresoRta").html("Datos Incorrectos");
    }else{
      $("#cEgresoRta").addClass("correcto");
      $("#cEgresoRta").html("Campo Válido");
    }      
    
    var params = $("form").serialize();
    console.log(params);
    $.ajax({
      url : 'libroNegro.php?op=registrarHC',
      data : {
        params: params
      },
      type : 'POST',
      dataType : 'text',

      success : function(data){

        }
    });
  });

  $("#elegircie10").click(function(e){
    e.preventDefault();    
    $.ajax({
      url : 'modalCIE10Ingreso.php',
      data : {
          
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){
          $("#contenedor").append(data);
          $('#modalCie10').modal('show');
        }
    });
  });
  
  $("#elegircie100").click(function (e) {
    e.preventDefault();
    $.ajax({
      url: 'modalCIE10Intermedio.php',
      data: {

      },
      type: 'POST',
      dataType: 'html',
      success: function (data) {
        $("#contenedor").append(data);
        $('#modalCie100').modal('show');
      }
    });
  });

  $("#elegircie1000").click(function (e) {
    e.preventDefault();
    $.ajax({
      url: 'modalCIE10Egreso.php',
      data: {

      },
      type: 'POST',
      dataType: 'html',
      success: function (data) {
        $("#contenedor").append(data);
        $('#modalCie1000').modal('show');
      }
    });
  });

  $("#elegirbarrio").click(function(e){
    e.preventDefault();    
    $.ajax({
      url : 'modalBarrio.php',
      data : {
          
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){
          $("#contenedor").append(data);
          $('#modalBarrio').modal('show');
        }
    });
  });
});

function cargarOpcionesSelect(){
  
  $.ajax({
    url : 'libroNegro.php?op=sala',
    data : {
        
    },
    type : 'POST',
    dataType : 'html',      
    success : function(data){    
        $("#sala").html(data);                  
      }
  });

  $.ajax({
    url : 'libroNegro.php?op=medico',
    data : {
        
    },
    type : 'POST',
    dataType : 'html',      
    success : function(data){    
        $("#medico").html(data);                  
      }
  });

  $("#sala").change(function(){
    var idSala = $("#sala").val();
    $.ajax({
      url : 'libroNegro.php?op=cama',
      data : {
          idSala: idSala
      },
      type : 'POST',
      dataType : 'html',      
      success : function(data){    
        $("#cama").html(data);   
      }
    });
  });
}
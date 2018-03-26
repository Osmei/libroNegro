$(document).ready(function(){
  cargarOpcionesSelect();

  $("#volverA").click(function() {
    location.href="../acciones.html";
  })
  
  $("#myBtnCarga").click(function(e){
    e.preventDefault();

    var hayError = false;
    var hClinica = $("#hClinica").val();
    if(hClinica==""||Number.isNaN(hClinica)||hClinica.length>=8||/^\s+$/.test(hClinica)){
      $("#hClinicaRta").addClass("incorrecto");
      $("#hClinicaRta").html("Datos Incorrectos");
      hayError = true;
    }else{
      $("#hClinicaRta").addClass("correcto");
      $("#hClinicaRta").html("Campo Válido");
      hayError = false;
    }  

    var fIngreso = $("#fIngreso").val();
    if(fIngreso==""||/^\s+$/.test(fIngreso)){
      $("#fIngresoRta").addClass("incorrecto");
      $("#fIngresoRta").html("Datos incorrectos");
      hayError = true;
    }else{
      $("#fIngresoRta").addClass("correcto");
      $("#fIngresoRta").html("Campo Válido");
      hayError = false;
    }
        
  var nCompleto = $("#nCompleto").val();
  if(nCompleto==""||nCompleto.length>=25||/^\s+$/.test(nCompleto)){
    $("#nCompletoRta").addClass("incorrecto");
    $("#nCompletoRta").html("Datos incorrectos");
    hayError = true;
  }else{
    $("#nCompletoRta").addClass("correcto");
    $("#nCompletoRta").html("Campo Válido");
    hayError = false;
  }

  var dni = $("#dni").val();
    if (dni == "" || Number.isNaN(dni)){
    /*console.log("Esta vacío o no es un numero");*/
    $("#dniRta").addClass("incorrecto");
    $("#dniRta").html("Datos incorrectos");
    hayError = true;
  }else{
    /*console.log("Asi esta bien");*/
    $("#dniRta").addClass("correcto");
    $("#dniRta").html("Campo Válido");
    hayError = false;
  }

  if($("#sala").val().trim() === '') {
    $("#salaRta").addClass("incorrecto");
    $("#salaRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#salaRta").addClass("correcto");
    $("#salaRta").html("Campo Válido");
    hayError = false;
  }  
 
  if ($("#cama").val().trim() === '') {
    $("#camaRta").addClass("incorrecto");
    $("#camaRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#camaRta").addClass("correcto");
    $("#camaRta").html("Campo Válido");
    hayError = false;
  }            

  if($("#sexo").val().trim() === '') {
    $("#sexoRta").addClass("incorrecto");
    $("#sexoRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#sexoRta").addClass("correcto");
    $("#sexoRta").html("Campo Válido");
    hayError = false;
  }  

  var edad = $("#edad").val();
  if(edad===""||edad.length>=3||/^\s+$/.test(edad)){
    $("#edadRta").addClass("incorrecto");
    $("#edadRta").html("Datos incorrectos");
    hayError = true;
  }else{
    $("#edadRta").addClass("correcto");
    $("#edadRta").html("Campo Válido");
    hayError = false;
  }

  var accidente = $("#tAccidente").val();
  if(accidente==""||/^\s+$/.test(accidente)){
    $("#tAccidenteRta").addClass("incorrecto");
    $("#tAccidenteRta").html("Datos incorrectos");
    hayError = true;
  }else{
    $("#tAccidenteRta").addClass("correcto");
    $("#tAccidenteRta").html("Campo Válido");
    hayError = false;
  }

  /**
   * esta condición me permite preguntar si existe el objeto.
   * en este caso el input de cie-10
   */
  if($("#cie10").length){  
    $("#cie10Rta").addClass("correcto");
    $("#cie10Rta").html("Campo Válido");  
    hayError = false;
  }else{
    $("#cie10Rta").addClass("incorrecto");
    $("#cie10Rta").html("Elegir Cie-10");
    hayError = true;
  }

  if($("#barrio").length){
    $("#barrioRta").addClass("correcto");
    $("#barrioRta").html("Campo Válido");  
    hayError = false;
  } else {
    $("#barrioRta").addClass("incorrecto");
    $("#barrioRta").html("Datos Incorrectos");
    hayError = true;
  }

  var medico = $("#medico").val();
  if(medico!=0){ 
    $("#medicoRta").addClass("correcto");
    $("#medicoRta").html("Campo Válido");
    hayError = false;
  } else {
    $("#medicoRta").addClass("incorrecto");
    $("#medicoRta").html("Datos Incorrectos");
    hayError = true;    
  }

  if ($("#cie100").length) {
    $("#cie100Rta").addClass("correcto");
    $("#cie100Rta").html("Campo Válido");
    hayError = false;
  } else {
    $("#cie100Rta").addClass("incorrecto");
    $("#cie100Rta").html("Elegir Cie-10");
    hayError = true;
  }   

  if ($("#cie1000").length) {
    $("#cie1000Rta").addClass("correcto");
    $("#cie1000Rta").html("Campo Válido");
    hayError = false;
  } else {
    $("#cie1000Rta").addClass("incorrecto");
    $("#cie1000Rta").html("Elegir Cie-10");
    hayError = true;
  }        
     
  var diagnostico = $("#diagnostico").val();
  if(diagnostico==''||/^\s+$/.test(diagnostico)){
    $("#diagnosticoRta").addClass("incorrecto");
    $("#diagnosticoRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#diagnosticoRta").addClass("correcto");
    $("#diagnosticoRta").html("Campo Válido");
    hayError = false;
  }

  var fAlta = $("#fAlta").val();  
  if(fAlta==""||/^\s+$/.test(fAlta)){
    $("#fAltaRta").removeClass("correcto");
    $("#fAltaRta").addClass("incorrecto");
    $("#fAltaRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#fAltaRta").removeClass("incorrecto");
    $("#fAltaRta").addClass("correcto");
    $("#fAltaRta").html("Campo Válido");
    hayError = false;    
  }
   
  if($("#cEgreso").val().trim() === '') {
    $("#cEgresoRta").addClass("incorrecto");
    $("#cEgresoRta").html("Datos Incorrectos");
    hayError = true;
  }else{
    $("#cEgresoRta").addClass("correcto");
    $("#cEgresoRta").html("Campo Válido");
    hayError = false;
  }      
    
  if(!hayError){
    var params = $("form").serialize();
    
    $.ajax({
      url : 'libroNegro.php?op=registrarHC',
      data : {
        params: params
      },
      type : 'POST',
      dataType : 'text',
      success : function(data){
        switch (data) {
          case 'OK':
            $("#modalOK").modal('show');
            $("input[type=text]").val("");
            $("input[type=date]").val("");                                        
            setTimeout(function(){
              location.reload();
            }, 2000);
          break;
          case 'ERROR':
            $("#modalERROR").modal('show');
          break;
          case 'HCREPETIDA':
            $("#modalHCREP").modal('show');
          break;
        }
      }
    });
  }else{
    $("#modalElse").modal('show');
  }
  
}); /** END CLICK GUARDAR BUTTON */

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
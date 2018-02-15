<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/signInForm.css">
   
   <title>Libro Negro</title>

   <script src="../js/jquery-3.3.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../js/validarCampos.js"></script>

</head>
<body>
  <header>
    <h1>Libro Negro</h1>   
  </header>   
  <div id="contenedor">
    <form id="formInput" class="form">
      
      <div class="hc fondoDiv">
        <h2>Historia Clinica</h2>
        <input type="text" id="hClinica" name="hClinica" class="claseInput">
        <div id="hClinicaRta"></div>
      </div>
      
      <div class="fIngreso fondoDiv">   
        <h2>Fecha de Ingreso</h2>
        <input type="date" id="fIngreso" name="fIngreso" class="claseInput">
        <div id="fIngresoRta"></div>
      </div>   
      
      <div class="nCompleto fondoDiv">   
        <h2>Nombre y Apellido</h2>
        <input type="text" id="nCompleto" name="nCompleto" class="claseInput">
        <div id="nCompletoRta"></div>
      </div>

      <div class="dniC fondoDiv">   
        <h2>DNI</h2>
        <input type="text" id="dni" name="dni" class="claseInput">
        <div id="dniRta"></div>
      </div>
      
      <div class="sala fondoDiv">   
        <h2>Sala</h2>
        <select name="sala" id="sala">          
        </select>
        <div id="salaRta"></div>
      </div>   
      
      <div class="cama fondoDiv">   
        <h2>Cama</h2>
        <select name="cama" id="cama">
          <option value="">Seleccione una cama</option>
        </select>
        <div id="camaRta"></div>
      </div>   
      
      <div class="sexo fondoDiv">   
        <h2>Sexo</h2>
        <select name="sexo" id="sexo">
          <option value="">Seleccione una opción</option>
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
        <div id="sexoRta"></div>
      </div>   
      
      <div class="edad fondoDiv">   
        <h2>Edad</h2>
        <input type="text" id="edad" name="edad" class="claseInput">
        <div id="edadRta"></div>
      </div>
      
      <div class="accidente fondoDiv">   
        <h2>Accidente</h2>
        <input type="text" id="tAccidente" name="tAccidente" class="claseInput">
        <div id="tAccidenteRta"></div>
      </div>
      
      <div class="cie-10-Ingreso fondoDiv">   
        <h2>CIE-10-Ingreso</h2>
        <div id="ponerAquiCie" style="width:95%;"></div>
        <button class="btn btn-primary" id="elegircie10" data-toggle="modal" data-target="#modalCie10">Elegir</button>        
        <div id="cie10Rta"></div>
      </div>
      
      <div class="barrio fondoDiv">   
        <h2>Barrio</h2>
        <div id="ponerAquiBarrio" style="width:95%;"></div>
          <button class="btn btn-primary" id="elegirbarrio" data-toggle="modal" data-target="#modalBarrio">Elegir</button>
        <div id="barrioRta"></div>
      </div>
      
      <div class="medico fondoDiv">   
        <h2>Médico</h2>
        <select name="medico" id="medico"></select>
        <div id="medicoRta"></div>
      </div>
      
      <div class="cie-10-Intermedio fondoDiv">   
        <h2>CIE-10-Intermedio</h2>
        <div id="ponerAquiCieB" style="width:80%"></div>
        <button class="btn btn-primary" id="elegircie100" data-toggle="modalB" data-target="#modalCie100">Elegir</button>        
        <div id="cie100Rta"></div>
      </div>
      
      <div class="cie-10-Egreso fondoDiv">   
        <h2>CIE-10-Egreso</h2>
        <div id="ponerAquiCieC" style="width:95%"></div>
        <button class="btn btn-primary" id="elegircie1000" data-toggle="modalC" data-target="#modalCie1000">Elegir</button>        
        <div id="cie1000Rta"></div>
      </div>
      
      <div class="fechaAlta fondoDiv">   
        <h2>Fecha de Alta</h2>
        <input type="date" id="fAlta" name="fAlta" class="claseInput">
        <div id="fAltaRta"></div>
      </div>      

      <div class="condEgreso fondoDiv">   
        <h2>CondEgreso</h2>
        <select name="cEgreso" id="cEgreso">
          <option value="" selected="selected">Seleccione una opción</option>
          <option value="1">Alta</option>
          <option value="2">Fallecimiento</option>
          <option value="3">Traslado</option>
          <option value="4">Derivación</option>
        </select>
        <div id="cEgresoRta"></div>
      </div>          
    </form>   
    <div class="submit">
        <button type="submit" id="myBtnCarga" class="btn-carga">Cargar</button>
        <button type="submit" id="volverA" class="btn-carga">Página Principal</button>
    </div>
</div>  

<div class="modal fade" id="modalOK" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">GUUT!</h5>
      </div>
      <div class="modal-body">
        <p>Historia Clínica agregada satisfactoriamente</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bien, sigamos entonces!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalERROR" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">GUUT!</h5>
      </div>
      <div class="modal-body">
        <p>Hubo un error, intente nuevamente más tarde o contáctese con el administrador</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bien, creo que eso haré!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalHCREP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">UPS!</h5>
      </div>
      <div class="modal-body">
        <p>Historia Clínica Repetida!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bien, verificaré mi Error!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalElse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">UPS!</h5>
      </div>
      <div class="modal-body">
        <p>Debe completar todos los campos</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendido, lo intentaré nuevamente!</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
































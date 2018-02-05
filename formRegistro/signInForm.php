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

   <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../js/validarCampos.js"></script>
</head>
<body>
  <header>
    <h1>Libro Negro</h1>   
  </header>   
  <div id="contenedor">
    <form id="formInput">
      <div class="hc">
        <h2>Historia Clinica</h2>
        <input type="text" id="hClinica" name="hClinica">
        <div id="hClinicaRta"></div>
      </div>
      <div class="fIngreso">   
        <h2>Fecha de Ingreso</h2>
        <input type="text" id="fIngreso" name="fIngreso">
        <div id="fIngresoRta"></div>
      </div>   
      <div class="nCompleto">   
        <h2>Nombre</h2>
        <input type="text" id="nCompleto" name="nCompleto">
        <div id="nCompletoRta"></div>
      </div>
      <div class="sala">   
        <h2>Sala</h2>
        <!--input type="text" id="sala" name="sala"-->
        <select name="sala" id="sala">          
        </select>
        <div id="salaRta"></div>
        </div>   
      <div class="cama">   
        <h2>Cama</h2>
        <!--input type="text" id="cama" name="cama"-->
        <select name="cama" id="cama">
          <option>Seleccione una cama</option>
        </select>
        <div id="camaRta"></div>
      </div>   
      <div class="sexo">   
        <h2>Sexo</h2>
        <!--input type="text" id="sexo" name="sexo"-->
        <select name="sexo" id="sexo">
          <option value="0">Seleccione una opción</option>
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
        <div id="sexoRta"></div>
      </div>   
      <div class="edad">   
        <h2>Edad</h2>
        <input type="text" id="edad" name="edad">
        <div id="edadRta"></div>
      </div>
      <div class="accidente">   
        <h2>Accidente</h2>
        <input type="text" id="tAccidente" name="tAccidente">
        <div id="tAccidenteRta"></div>
      </div>
      <div class="cie-10">   
        <h2>CIE-10</h2>
        <div id="ponerAquiCie"></div>
        <button class="btn btn-primary" id="elegircie10" data-toggle="modal" data-target="#modalCie10">Elegir</button>        
        <div id="cie10Rta"></div>
      </div>
      <div class="barrio">   
        <h2>Barrio</h2>
        <div id="ponerAquiBarrio"></div>
        <button class="btn btn-primary" id="elegirbarrio" data-toggle="modal" data-target="#modalBarrio">Elegir</button>
        <div id="barrioRta"></div>
      </div>
      <div class="medico">   
        <h2>Médico</h2>
        <!--input type="text" id="medico" name="medico"-->
        <select name="medico" id="medico"></select>
        <div id="medicoRta"></div>
      </div>
      <div class="operPract">   
        <h2>OperPract</h2>
        <input type="text" id="cPracticada" name="cPracticada">
        <div id="cPracticadaRta"></div>
      </div>
      <div class="diagOper">   
        <h2>DiagOper</h2>
        <input type="text" id="diagnostico" name="diagnostico">
        <div id="diagnosticoRta"></div>
      </div>
      <div class="fechaAlta">   
        <h2>Fecha de Alta</h2>
        <input type="text" id="fAlta" name="fAlta">
        <div id="fAltaRta"></div>
      </div>         
      <div class="condEgreso">   
        <h2>Cond Egreso</h2>
        <input type="text" id="cEgreso" name="cEgreso">
      <div id="cEgresoRta"></div>
      </div>  
    </form>   
</div>
  <div class="submit">
    <button type="submit" id="myBtnCarga" class="btn-carga">Cargar</button>
  </div>
  <footer>
    <div class="content">
      <div class="misRedes">
        <ul>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>    
      </div>
      <div class="legales">
        <a href="#">@OsmeiG es Marca Registrada</a>
      </div>
    </div>   
  </footer>
</body>
</html>
































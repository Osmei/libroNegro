<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="admision.js"></script>
  
  <link rel="stylesheet" href="../css/admision.css">
  
  <title>Admision</title>
</head>

<body>
  
  <div class="container">
    <header class="header">
      <h1>Sistema de Admisión</h1>
    </header>
  </div>
  
  <div class="container">
    <form action="" name="formAdmision" id="formAdmision" class="formAdmision">
      
      <div class="form-row">
        <div class="form-group col-md-6">  
          <div class="sector">
            <label for="sector">Sector</label>
            <select name="sector" class="custom-select" id="sector">
              <option selected>Seleccione sector</option>
              <option value="Sector A">Sector A</option>
              <option value="Sector C">Sector C</option>
              <option value="Sector UTI">UTI</option>
              <option value="Sector Shock Room">Shock Room</option>
            </select>
          </div>
        </div>  
        <div class="form-group col-md-6">
          <div class="cama">
            <label for="cama">Cama</label>
            <input type="number" name="cama" class="form-control" id="cama">
          </div>
        </div>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">  
          <div class="nombreApellido">
            <label for="nombreApellido">Nombre y Apellido</label>
            <input type="text" name="nya" class="form-control" id="nombreApellido">
          </div>
        </div>  
        <div class="form-group col-md-6">  
          <div class="edad">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="form-control" id="edad">
          </div>
        </div>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">  
          <div class="fIngreso">
            <label for="fIngreso">Fecha de Ingreso</label>
            <input type="date" name="ingreso" class="form-control" id="fIngreso">
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="numeroHc">
            <label for="numeroHc">Número de Historia Clínica</label>
            <input type="number" name="hClinica" class="form-control" id="numeroHc">
          </div>
        </div>
      </div>
      <div class="diagnostico">
        <div class="form-group col-lg-12 diagnostico">
          <label for="diagnostico">Diagnóstico</label>
          <input type="text" name="diagnostico" class="form-control" id="diagnostico">
        </div>
      </div>
      <div class="obraSocial">
        <div class="form-group col-lg-12 obraSocial">
-         <label>Art-Obra Social-Mot.Ingreso</label>
-         <input type="text" name="obraSocial" class="form-control" id="oSocial">
        </div>  
      </div>
      <div class="observaciones">
        <div class="form-group col-lg-12 observaciones">
          <label for="observaciones">Obervaciones</label>
          <input type="text" name="observaciones" class="form-control" id="observaciones">
        </div>
      </div>  
      <div class="contButons">
        <div class="contSubmit">
          <input type="submit" class="btnReg" id="btnReg" value="Registrar">
        </div>
        <div class="contButton">
          <input type="button" class="btnAdmiCargadas" id="btnAdmiCargadas" value="Ver Admisiones Cargadas">
        </div>
      </div>
    
    </form>
    <footer>
      <div>
        <p>@From: Osmei</p>
      </div>
      <div>
        <p>Division de Informática</p>
      </div>
      <div>
        <img src="../img/hmu_logo.png" title="Logo HMU" class="logoHospi">
      </div>
    </footer>
  </div>
</body>
</html>
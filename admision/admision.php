<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admisión</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="../css/admision.css">
  <script src="admision.js"></script>
</head>

<body>

  <div class="container">
    <h2 class="text-center">Sistema de Admisión</h3>
    
    <div class="jumbotron">
      <h2 class="text-muted text-center">Listar Pacientes</h2>
      
      <form id="formAdmision" class="formAdmision" id="formAdmision">
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="sector">Sector</label>
            <select name="sector" class="custom-select" id="sector">

            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="cama">Cama</label>
            <input type="number" name="cama" class="form-control" id="cama" placeholder="cama">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="nya">Nombre y Apellido</label>
            <input type="text" name="nya" class="form-control" id="nya" placeholder="Nombre y Apellido">
          </div>
          <div class="form-group col-sm-6">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="form-control" id="edad" placeholder="edad">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="fIngreso">Fecha de Ingreso</label>
            <input type="date" name="ingreso" class="form-control" id="fIngreso">
          </div>
          <div class="form-group col-sm-6">
            <label for="nroHc">Nro Historia Clínica</label>
            <input type="number" name="hClinica" class="form-control" id="numeroHc">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="diagnostico">Diagnóstico</label>
            <input type="text" name="diagnostico" id="diagnostico" class="form-control" placeholder="Diagnóstico">
          </div>
          <div class="form-group col-lg-6">
            <label for="oSocial">ART - Obra Social - Motivo de Ingreso</label>
            <input type="text" name="obraSocial" class="form-control" id="oSocial">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-12">
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" class="form-control" id="observaciones" placeholder="Observaciones Generales...">
          </div>
        </div>
        <div class="content-buttons">
          <button type="submit" name="btnReg" id="btnReg" class="btn btn-primary btn-lg">Registrar</button>
          <button type="button" class="btn btn-primary btn-lg" id="btnAdmiCargadas">Ver Admisiones</button>
        </div>
      </form>
    </div>

    <footer class="footer">
      <label>&copy; 2018 Informática, Inc.</label>
      <img src="../img/hmu_logo.png" title="Logo HMU" class="logoHospi">
      <label>Division de Informática</label>
    </footer>
  </div>
</body>

</html>


















<!-- <a href="#" target="_blank" class="btn btn-primary btn-lg" role="button" id="btnAdmiCargadas">Ver Admisiones Cargadas</a> -->
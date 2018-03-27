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
  
  <title>Admision con Bootstrap</title>
</head>

<body>
  <div class="container">
    <header>
      <h1>Sistema de Admisión</h1>
    </header>
  </div>
  <div class="container">
    <form action="" name="formAdmision" id="formAdmision">
      <div class="form-row">
        <div class="form-group sector col-md-6">
          <label for="sector">Sector</label>
          <select class="custom-select" id="sector">
            <option selected>Seleccione sector</option>
            <option value="Sector A">Sector A</option>
            <option value="Sector C">Sector C</option>
            <option value="Sector UTI">UTI</option>
            <option value="Sector Shock Room">Shock Room</option>
          </select>
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="cama">Cama</label>
          <input type="number" class="form-control" id="cama">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group nombreApellido col-md-6">
          <label for="nombreApellido">Nombre y Apellido</label>
          <input type="text" class="form-control" id="nombreApellido">
        </div>
        <div class="form-group edad col-md-6">
          <label for="edad">Edad</label>
          <input type="number" class="form-control" id="edad">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group fIngreso col-md-6">
          <label for="fIngreso">Fecha de Ingreso</label>
          <input type="date" class="form-control" id="fIngreso">
        </div>
        <div class="form-group numeroHc col-md-6">
          <label for="numeroHc">Número de Historia Clínica</label>
          <input type="number" class="form-control" id="numeroHc">
        </div>
      </div>
      <div class="form-group diagnostico">
        <label for="diagnostico">Diagnóstico</label>
        <input type="text" class="form-control" id="diagnostico">
      </div>
      <div class="form-group observaciones">
        <label for="observaciones">Obervaciones</label>
        <input type="text" class="form-control" id="observaciones">
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
  </div>
</body>
</html>
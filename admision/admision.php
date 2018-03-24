<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../css/admision.css">
   <script src="admision.js"></script>
   <title>Admisión</title>
</head>
<body>
  <div class="container">    
    <form action="" name="formAdmision" id="formAdmision">
      <div class="sector">
        <h2>Sector</h2>
        <br>
        <select name="sector" id="sector">
          
        </select>
      </div>
      <div class="cama">         
        <h2>Cama</h2>
        <input type="text" id="cama" name="cama">
      </div>
      <div class="nya">
        <h2>Nombre y Apellido</h2>
        <input type="text" id="nya" name="nya">
      </div>
      <div class="edad">
        <h2>Edad</h2>
        <input type="text" id="edad" name="edad">
      </div>
      
      <div class="diagnostico">
        <h2>Diagnóstico</h2>
        <input type="text" id="diagnostico" name="diagnostico">
      </div>
      
      <div class="observaciones">
        <h2>Observaciones</h2>
        <input type="text" id="observaciones" name="observaciones">
      </div>

      <div class="ingreso">
        <h2>Fecha de Ingreso</h2>
        <input type="date" id="ingreso" name="ingreso">
      </div>

      <div class="hc">
        <h2>Nro de H.C</h2>
        <input type="text" id="hc" name="hc">
      </div>

      <div class="obraSocial">
        <h2>Art-Obra Social-Mot.Ingreso</h2>
        <input type="text" id="obraSocial" name="obraSocial">
      </div>
      
      <div class="button" id="btnCarga">
        <input type="submit" value="Registrar" id="btnReg">        
      </div>
    </form>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estadisticas</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="index.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Calcular Estadística</h1>
            <select name="tiposEst" id="tiposEst" class="form-control">
                <option value="0">Elegir una opción...</option>
                <option value="1">Calcular porcentaje de ocupación de camas</option>
                <option value="2">Calcular giro cama</option>
                <option value="3">Calcular promedio de pacientes-día por egreso</option>
                <option value="4">Calcular promedio de días de estada</option>
                <option value="5">Calcular cantidad de egresos total y por unidad operativa</option>
                <option value="6">Calcular cantidad de egresos según variables seleccionadas que caracterizan al paciente</option>
                <option value="7">Calcular tasa de mortalidad hospilataria</option>
            </select>
        </div>
        <div class="col-md-12">        
            <div id="divPeriodo">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fDesde">Desde</label>
                        <input type="date" name="fDesde" id="fDesde" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="fHasta">Hasta</label>
                        <input type="date" name="fHasta" id="fHasta" class="form-control">
                    </div>
                </div>                                            
            </div>
        </div>        
    </div>
</div>
</body>
</html>
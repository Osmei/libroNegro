<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Admisiones</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <!-- <script src="imprimir.js"></script> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="filtrosResultado">
                <div class="col-md-12">
                    <h3>Buscar por</h3>
                </div>
                <form>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha">Fecha de Ingreso:</label>
                            <input type="date" name="fecha" id="fecha" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sector">Sector:</label>
                            <select name="sector" id="sector" class="form-control">
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-offset-11 col-md-1">
                        <input type="submit" value="Buscar" class="btn" id="buscarAdmi">
                    </div>
                </form>                
            </div>
            <div id="tablaResultado">
                <table class="table table-hover">
                    <tr>
                        <th>Cama</th>
                        <th>Edad</th>
                        <th>Diagnostico</th>
                        <th>Observaciones</th>
                        <th>Número de Historia Clínica</th>
                        <th>Obra Social</th>
                        <th>Sector Admisión</th>
                        <th>Nombre y Apellido</th>
                        <th>Fecha de Ingreso</th>
                    </tr>
                    <tbody id="contenidoTabla">
                        
                    </tbody>
                </table>
                <div class="col-md-offset-11 col-md-1">
                    <input type="button" value="imprimir" class="btn" id="imprimir">
                </div>
            </div>            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="imprimir.js"></script>
    <script src="listaAdmisiones.js"></script>
</body>
</html>
<?php
    require_once("../includes/includes.php");

    $bd = new bd();

    $HCs = "SELECT * FROM historiaclinica ORDER BY nroHC DESC" ;
    $historias = $bd->ejecutarNonQuery($HCs);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/lista.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/lista.js"></script>
    
    <title>Lista de Historias Clínicas Registradas</title>

</head>
<body>
    <div class="container">
        <header>
            <button type="submit" id="volverB" class="volverB">Cargar</button>
            <input type="text" id="busqueda" class="busqueda" placeholder="DNI, Nombre y Apellido, Fecha">
            <button type="button" id="volverC" class="volverC">Página Principal</button>
        </header>
        <div id="pegarModal" class="pegarModal">
            <table class="table table-bordered">
                <thead>
                    <th>N° Historia Clínica</th>
                    <th>N° Apellido y Nombre</th>
                    <th>DNI</th>
                    <th>Accidente</th>
                    <th>Ver</th>
                </thead>
                <tbody id="insertarBusquedas">
                    <?php
                        foreach ($historias as $historia){
                            echo "<tr>";
                                echo "<td>".$historia['nroHC']."</td>";
                                echo "<td>".$historia['ApellidoNombre']."</td>";
                                echo "<td>".$historia['DNI']."</td>";
                                echo "<td>".$historia['Accidente']."</td>";
                                echo "<td><button class='btn btn-primary activarModalInfo' data-toggle='modal' data-target='#todaLaInfoHC'>
                                    Ver Historia Clínica Completa
                                    </button></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
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

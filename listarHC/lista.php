<?php
    require_once("../includes/includes.php");
    
    $bd = new bd();
    
    $HCs = "SELECT * FROM historiaclinica";
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/lista.js"></script>

    <title>Lista de Historias Clínicas Registradas</title>
</head>
<body>
    <div class="container">
        <div id="pegarModal">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>N° Historia Clínica</th>
                    <th>N° Apellido y Nombre</th>
                    <th>DNI</th>
                    <th>Accidente</th>                
                    <th>Ver</th>
                </thead>
                <tbody>
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
    </div>
</body>
</html>
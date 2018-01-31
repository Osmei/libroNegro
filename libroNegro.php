<?php 
    /**
     * Activar errores en caso de que algo no funcione y 
     * haya que buscar donde falla, sino dejar comentados
     */

    /*error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set("display_errors", 1);
    */

    require_once("includes/includes.php");

    $bd = new bd();
    
    switch ($_GET['op']) {
        case 'sala':
            $querySala = "SELECT * FROM Sala";
            $salas = $bd->ejecutarQuery($querySala);
            $opciones = "<option value='0'>Elegir una sala...</option>";
            foreach ($salas as $sala) {
                $opciones.="<option value='".$sala['idSala']."'>".$sala['nombreSala']."</option>";
            }
            echo $opciones;
        break;
        case 'cama':
            if(isset($_POST['idSala'])){
                $idSala = $_POST['idSala'];
            }
            $queryCama = "SELECT * FROM Cama where Sala_idSala = $idSala";
            $camas = $bd->ejecutarQuery($queryCama);
            $opciones = "<option value='0'>Elegir una cama...</option>";
            foreach ($camas as $cama) {
                $opciones.="<option value='".$cama['idCama']."'>".$cama['descripcion']."</option>";
            }
            echo $opciones;
        break;
    }


?>
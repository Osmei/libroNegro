<?php 
    /**
     * Activar errores en caso de que algo no funcione y 
     * haya que buscar donde falla, sino dejar comentados
     */

    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set("display_errors", 1);
    

    require_once("../includes/includes.php");

    $bd = new bd();
    
    switch ($_GET['op']) {
        case 'sala':
            $querySala = "SELECT * FROM LibroNegro.Sala";
            $salas = $bd->ejecutarQuery($querySala);
            $opciones = "<option value=''>Elegir una sala</option>";
            foreach ($salas as $sala) {
                $opciones.="<option value='".$sala['idSala']."'>".$sala['nombreSala']."</option>";
            }
            echo $opciones;
        break;
        
        case 'cama':
            if(isset($_POST['idSala'])){
                $idSala = $_POST['idSala'];
            }
            $queryCama = "SELECT * FROM Cama WHERE Sala_idSala = $idSala";
            $camas = $bd->ejecutarQuery($queryCama);
            $opciones = "<option value='0'>Elegir una cama</option>";
            foreach ($camas as $cama) {
                $opciones.="<option value='".$cama['nroCama']."'>".$cama['nroCama']."</option>";
            }
            echo $opciones;
        break;
        
        case 'cie10':
            $queryCie = "SELECT * FROM LibroNegro.CIE10"; 
            $cies = $bd->ejecutarQuery($queryCie);
            $opciones = "<option value='0'>Elegir una opción</option>";
            foreach ($cies as $cie) {
                $opciones.="<option value='".$cie['idCIE10']."'>".$cie['Descripcion']."</option>";
            }
            echo $opciones;
        break;
        
        case 'medico':
            $queryMedico = "SELECT * FROM Medico"; 
            $medicos = $bd->ejecutarQuery($queryMedico);
            $opciones = "<option value='0'>Elegir una opción</option>";
            foreach ($medicos as $medico) {
                $opciones.="<option value=''>".$medico['Nombre']." - ".$medico['DNI']."</option>";
            }
            echo $opciones;
        break;

        case 'cargarCie':
            if(isset($_POST['palabra'])){
                $palabra = $_POST['palabra'];
            }
            $queryCie = "SELECT * FROM LibroNegro.CIE10 WHERE idCIE10 LIKE '%$palabra%' LIMIT 15";
            $cies = $bd->ejecutarQuery($queryCie);
            $items = "";
            foreach ($cies as $cie) {
                $items .= utf8_encode("<tr><td class='itemCie' data-cie='".$cie['idCIE10']." - ".$cie['Descripcion']."'>".$cie['idCIE10']." - ".$cie['Descripcion']."</td><td><button class='btn btn-primary grabarCie' data-dismiss='modal'>Elegir</button></td></tr>");
            }
            echo $items;
        break;
        case 'cargarCie1':
            if(isset($_POST['palabra'])){
                $palabra = $_POST['palabra'];
            }
            $queryCie = "SELECT * FROM LibroNegro.CIE10 WHERE idCIE10 LIKE '%$palabra%' OR Descripcion LIKE '$palabra%' LIMIT 15";
            $cies = $bd->ejecutarQuery($queryCie);
            $items = "";
            foreach ($cies as $cie) {
                $items .= utf8_encode("<tr><td class='itemCie' data-cie='".$cie['idCIE10']." - ".$cie['Descripcion']."'>".$cie['idCIE10']." - ".$cie['Descripcion']."</td><td><button class='btn btn-primary grabarCie' data-dismiss='modal'>Elegir</button></td></tr>");
            }
            echo $items;
        break;
        case 'cargarCie2':
            if(isset($_POST['palabra'])){
                $palabra = $_POST['palabra'];
            }
            $queryCie = "SELECT * FROM LibroNegro.CIE10 WHERE idCIE10 LIKE '%$palabra%' LIMIT 15";
            $cies = $bd->ejecutarQuery($queryCie);
            $items = "";
            foreach ($cies as $cie) {
                $items .= utf8_encode("<tr><td class='itemCie' data-cie='".$cie['idCIE10']." - ".$cie['Descripcion']."'>".$cie['idCIE10']." - ".$cie['Descripcion']."</td><td><button class='btn btn-primary grabarCie' data-dismiss='modal'>Elegir</button></td></tr>");
            }
            echo $items;
        break;


        case 'cargarBarrio':
            if(isset($_POST['palabra'])){
                $palabra = $_POST['palabra'];
            }
            $queryBarrio = "SELECT * FROM LibroNegro.Barrio WHERE idBarrio LIKE '%$palabra%' OR barrio LIKE '$palabra%' LIMIT 15";
            $barrios = $bd->ejecutarQuery($queryBarrio);
            $items = "";
            foreach ($barrios as $barrio) {
                $items .= utf8_encode("<tr><td class='itemBarrio' data-barrio='".$barrio['Barrio']."'>".$barrio['Barrio']."</td><td><button class='btn btn-primary grabarBarrio' data-dismiss='modal'>Elegir</button></td></tr>");
            }
            echo $items;
        break;
        case 'registrarHC':
            
            parse_str($_POST['params'],$params);
            //prd($valores);          
            if($params['sexo']==1){
                $sexo = "M";
            }else{
                $sexo = "F";
            }

            $queryInsert= "INSERT INTO `LibroNegro`.`HistoriaClinica` (`nroHC`, `ApellidoNombre`, `DNI`, `Sexo`, `Edad`, `Cama_idCama`, `Cama_Sala_idSala`, `Barrio_idBarrio`, `IntervencionMedica_idIntervencionMedica`, `Accidente_idAccidente`) 
                            VALUES (".$params['hClinica'].",'".$params['nCompleto']."','DNI','".$sexo."', ".$params['edad'].", '".$params['cama']."', '".$params['sala']."', 'IDBARRIO', '124', '41')";

            /**
             * - Falta DNI en el input, consultar mauri.
             * - Falta idBarrio (sandro codear).
             * - Falta Intervención Médica.
             * - Falta idAccidente.
             */

        break;
    }
?>
<?php

    require_once("../includes/includes.php");

    $bd = new bd();

    switch ($_GET['op']){
        case 'cargarSectorAdmision':
            $querySector = "SELECT * from sectoradmision";
            $sectores = $bd->ejecutarQuery($querySector);
            $opciones = "<option value='0'>Elegir sector...</option>";
            foreach ($sectores as $sector) {
                $opciones.="<option value='".$sector['idSector']."'>".$sector['descripcion']."</option>";
            }
            echo $opciones;
        break;
        case 'registrarAdmision':
            parse_str($_POST['params'],$params);
            //prd($params);

            $queryInsert = "INSERT INTO `libronegro`.`admision` (`cama`, `edad`, `diagnostico`, `observaciones`, `idHistClinica`, `obraSocial`, `idSectorAdmision`, `nombreApellido`, `fechaIngreso`)
                                   VALUES ('".$params["cama"]."', '".$params["edad"]."', '".$params["diagnostico"]."', '".$params["observaciones"]."', '".$params["hc"]."', '".$params["obraSocial"]."', '".$params["sector"]."', '".$params["nya"]."', '".$params["ingreso"]."')";
            //prd($queryInsert);
            if($bd->ejecutarNonQuery($queryInsert))
                echo "OK";
            else{
                echo "ERROR";
            }

        break;
    }


?>
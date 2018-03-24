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
    }


?>
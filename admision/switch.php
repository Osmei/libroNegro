<?php

    require_once("../includes/includes.php");

    $bd = new bd();

    switch ($_GET['op']){
        case 'cargarSectorAdmision':
            $querySector = "SELECT * from sectoradmision"; // Consulta a la base de datos. Guardamos la consulta/query en la variable $querySector.
            $sectores = $bd->ejecutarQuery($querySector);
            $opciones = "<option value='0'>Elegir sector...</option>";
            foreach ($sectores as $sector) {
                $opciones.="<option value='".$sector['idSector']."'>".$sector['descripcion']."</option>";
            }
            echo $opciones;
        break;
        case 'registrarAdmision':
            parse_str($_POST['params'],$params);
            
            
            $queryInsert = "INSERT INTO `libronegro`.`admision` (`cama`, `edad`, `diagnostico`, `observaciones`, `idHistClinica`, `obraSocial`, `idSectorAdmision`, `nombreApellido`, `fechaIngreso`)
                                   VALUES ('".$params["cama"]."', '".$params["edad"]."', '".$params["diagnostico"]."', '".$params["observaciones"]."', '".$params["hClinica"]."', '".$params["obraSocial"]."', '".$params["sector"]."', '".$params["nya"]."', '".$params["ingreso"]."')";
            //prd($queryInsert);
            if($bd->ejecutarNonQuery($queryInsert))
                echo "OK";
            else{
                echo "ERROR";
            }

        break;
        case 'cargarTablaReady':
            $queryTabla = "SELECT * FROM admision a INNER JOIN sectoradmision sa ON (a.idSectorAdmision = sa.idSector) ORDER BY fechaIngreso DESC";
            $admisiones = $bd->ejecutarQuery($queryTabla);          //prd($queryTabla);     
            $opciones = "";
            foreach ($admisiones as $admision) {
                $opciones .= "<tr>";
                $opciones .=    "<td>".$admision['descripcion']."</td>";
                $opciones .=    "<td>".$admision['cama']."</td>";
                $opciones .=    "<td>".$admision['nombreApellido']."</td>";
                $opciones .=    "<td>".$admision['edad']."</td>";
                $opciones .=    "<td>".$admision['diagnostico']."</td>";
                $opciones .=    "<td>".$admision['observaciones']."</td>";
                $opciones .=    "<td>".$admision['fechaIngreso']."</td>";
                $opciones .=    "<td>".$admision['idHistClinica']."</td>";
                $opciones .=    "<td>".$admision['obraSocial']."</td>";
                $opciones .= "</tr>";
            }
            echo $opciones;
        break;
        case 'cargarTablaFiltros':
            parse_str($_POST['datos'],$params);
            $parametros = "";
            if(is_null($params['fecha']) || $params['fecha']==""){
                $parametros .= "";
            }else{
                $parametros .= " && fechaIngreso = '".$params['fecha']."'";
            }
            if(is_null($params['sector']) || $params['sector']=="" || $params['sector']=="0"){
                $parametros .= "";
            }else{
                $parametros .= " && idSectorAdmision = '".$params['sector']."'";
            }
            if(is_null($params['nombre']) || $params['nombre']=="" || $params['nombre']=="0"){
                $parametros .= "";
            }else{
                $parametros .= " && nombreApellido like '%".$params['nombre']."%'";
            }

            $queryFiltros = "SELECT * 
                            FROM admision a 
                            INNER JOIN sectoradmision sa ON (a.idSectorAdmision = sa.idSector)
                            WHERE 1=1 ".$parametros;
                             //prd($queryFiltros);
            $admisiones = $bd->ejecutarQuery($queryFiltros);            
            $opciones = "";
            foreach ($admisiones as $admision) {
                $opciones .= "<tr>";
                $opciones .=    "<td>".$admision['descripcion']."</td>";
                $opciones .=    "<td>".$admision['cama']."</td>";
                $opciones .=    "<td>".$admision['nombreApellido']."</td>";
                $opciones .=    "<td>".$admision['edad']."</td>";
                $opciones .=    "<td>".$admision['diagnostico']."</td>";
                $opciones .=    "<td>".$admision['observaciones']."</td>";
                $opciones .=    "<td>".$admision['fechaIngreso']."</td>";
                $opciones .=    "<td>".$admision['idHistClinica']."</td>";
                $opciones .=    "<td>".$admision['obraSocial']."</td>";
                $opciones .= "</tr>";
            }
            echo $opciones;
        break;
        case 'cargarTablaReadySeguridad':
            $queryTabla = "SELECT * FROM admision a INNER JOIN sectoradmision sa ON (a.idSectorAdmision = sa.idSector)";
            $admisiones = $bd->ejecutarQuery($queryTabla);          //prd($queryTabla);     
            $opciones = "";
            foreach ($admisiones as $admision) {
                $opciones .= "<tr>";
                $opciones .=    "<td>".$admision['descripcion']."</td>";
                $opciones .=    "<td>".$admision['cama']."</td>";
                $opciones .=    "<td>".$admision['nombreApellido']."</td>";
                $opciones .=    "<td>".$admision['edad']."</td>";
                $opciones .=    "<td>".$admision['fechaIngreso']."</td>";
                $opciones .= "</tr>";
            }
            echo $opciones;
        break;
        case 'cargarTablaFiltrosSeguridad':
            parse_str($_POST['datos'],$params);
            $parametros = "";
            if(is_null($params['fecha']) || $params['fecha']==""){
                $parametros .= "";
            }else{
                $parametros .= " && fechaIngreso = '".$params['fecha']."'";
            }
            if(is_null($params['sector']) || $params['sector']=="" || $params['sector']=="0"){
                $parametros .= "";
            }else{
                $parametros .= " && idSectorAdmision = '".$params['sector']."'";
            }
            if(is_null($params['nombre']) || $params['nombre']=="" || $params['nombre']=="0"){
                $parametros .= "";
            }else{
                $parametros .= " && nombreApellido like '%".$params['nombre']."%'";
            }

            $queryFiltros = "SELECT * 
                            FROM admision a 
                            INNER JOIN sectoradmision sa ON (a.idSectorAdmision = sa.idSector)
                            WHERE 1=1 ".$parametros;
                             //prd($queryFiltros);
            $admisiones = $bd->ejecutarQuery($queryFiltros);            
            $opciones = "";
            foreach ($admisiones as $admision) {
                $opciones .= "<tr>";
                $opciones .=    "<td>".$admision['descripcion']."</td>";
                $opciones .=    "<td>".$admision['cama']."</td>";
                $opciones .=    "<td>".$admision['nombreApellido']."</td>";
                $opciones .=    "<td>".$admision['edad']."</td>";
                $opciones .=    "<td>".$admision['fechaIngreso']."</td>";
                $opciones .= "</tr>";
            }
            echo $opciones;
        break;
    }
?>
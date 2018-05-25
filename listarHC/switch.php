<?php

require_once("../includes/includes.php");

$bd = new bd();

switch ($_GET['op']) {
    case 'buscarHC':
        
        $palabra = $_POST['palabra'];

        $query = "SELECT * 
                  FROM historiaclinica 
                  WHERE DNI LIKE '%$palabra%' 
                    OR ApellidoNombre LIKE '%$palabra%' 
                    OR fechaDeIngreso LIKE '%$palabra%'
                  ORDER BY nroHC DESC";
        
        $items = $bd->ejecutarQuery($query);
        $opciones = "";
        foreach ($items as $item) {
            $opciones.= "<tr>";
                $opciones.= "<td>".$item['nroHC']."</td>";
                $opciones.= "<td>".$item['ApellidoNombre']."</td>";
                $opciones.= "<td>".$item['DNI']."</td>";
                $opciones.= "<td>".$item['Accidente']."</td>";
                $opciones.= "<td>
                        <button class='btn btn-primary activarModalInfo' data-toggle='modal' data-target='#todaLaInfoHC'>
                            Ver Historia Clínica Completa
                        </button>
                      </td>";
            $opciones.= "</tr>";
        }

        echo $opciones;

    break;        
}




?>
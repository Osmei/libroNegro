<?php

    require_once("../includes/includes.php");
    $estadistica = new estadistica();

    switch ($_GET['op']) {
        case 'opcion1':            
            $estadistica->porcentajeOcupacionCamas($_POST['fechaDesde'],$_POST['fechaHasta']);
        break;
        case 'opcion2':
        $estadistica->giroCama($_POST['fechaDesde'],$_POST['fechaHasta']);
        break;

    }

?>
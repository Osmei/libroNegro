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
    
    prd($bd);


?>
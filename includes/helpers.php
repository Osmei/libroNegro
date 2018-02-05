<?php

    function prd($param){
        echo "<pre>";
        print_r($param);
        die();
    }

    function traerErrores(){
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
        ini_set("display_errors", 1);
    }

?>
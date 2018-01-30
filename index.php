<?php

require_once("includes/includes.php");

$bd = new bd();

parse_str($_POST['params'],$valores);


if(isset($valores['usuario'])){
    $usuario = $valores['usuario'];
}
if(isset($valores['password'])){
    $password = $valores['password'];
}
prd($password)



?>
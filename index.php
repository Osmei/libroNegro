<?php

require_once("includes/helpers.php");
require_once("bd/bd.class.php");

$bd = new bd();

parse_str($_POST['params'],$valores);


if(isset($valores['usuario'])){
    $usuario = $valores['usuario'];
}
if(isset($valores['password'])){
    $password = $valores['password'];
}

$passwordEscriptado = md5(sha1($password));

//prd($passwordEscriptado);
if($usuario == null){
    echo "NOUSER";
}elseif($password == null){
    echo "NOPASS";
}else{
    $queryUser = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario' AND password = '$passwordEscriptado'";
    
    $data = $bd->ejecutarQuery($queryUser);
    //prd($queryUser);
    if($data != null){
        echo "OK";
    }else{
        echo "ERROR";
    }
}








?>
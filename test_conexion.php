<?php
require_once 'config/conexion.php';
$obj = new Conexion();
$res = $obj->conectar();

if($res){
    echo "¡CONECTADO EXITOSAMENTE A TU SQL SERVER!";
}
?>
<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$array=array('usuario' => $_POST['usuario'],'clave' => $_POST['clave'],'habilitado' => 1,'rol' => "usuario");
$sql="INSERT INTO usuario (usuario,clave,habilitado,rol) VALUE (:usuario,:clave,:habilitado,:rol)";
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO ->execute($array);
header('location: inicio.html');
?>
<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$array=array('nombre' => $_POST['nombre'],'apellido' => $_POST['apellido'],'documento'=> $_POST['documento'],'edad'=> $_POST['edad']);
$sql="INSERT INTO persona (nombre,apellido,documento,edad) VALUE (:nombre,:apellido,:documento,:edad)";
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO ->execute($array);
header('location:ejercicio4.php');
?>
<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$sql="DELETE FROM persona WHERE id=".$_GET['id'];
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();
header('location: ejercicio5.php');
?>
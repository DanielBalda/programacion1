<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);

$params=array(array('nombre' => 'daniel','apellido' => 'balda','documento'=>'37518394','edad'=>'22'),
    array('nombre' => 'roberto','apellido' => 'gonzales','documento'=>'21415122','edad'=>'50'),
    array('nombre' => 'juan','apellido' => 'clark','documento'=>'82975192','edad'=>'56'));
foreach ($params as $key){
    $sql = "INSERT INTO persona (nombre,apellido,documento,edad) VALUES (:nombre,:apellido,:documento,:edad)";
    $ejecucionSQLPDO = $conexion->prepare($sql);
    $ejecucionSQLPDO ->execute($key);
}

$sql = 'SELECT * FROM persona';
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();
echo "<pre>";
while ($fila = $ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)) {
    print_r($fila);
}
echo "</pre>";
die();
?>
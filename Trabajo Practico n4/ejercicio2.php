<table border="1">
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);

$sql = 'SELECT * FROM persona';
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();
while ($fila = $ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach ($fila as $valor){
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
die();
?>
</table>
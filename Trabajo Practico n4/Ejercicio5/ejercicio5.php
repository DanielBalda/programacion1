<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$sql = 'SELECT * FROM persona';
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();
echo "<table border='1'>";
while ($fila = $ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach ($fila as $valor){
        echo "<td>$valor</td>";
    }
    echo "<td><a href='eliminar.php?id=".$fila['id']."'>Eliminar</a></td>";
    echo "<td><a href='edicion.php?id=".$fila['id']."'>Editar</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<br><a href='agregar.html'>Agregar</a>";
die();
?>
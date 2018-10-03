<?php
echo "<h1>Contenido del Archivo:</h1><br>";
if (empty($_FILES['archivo']['name'])) {
    echo "<h3>(!) No ingreso ningun archivo</h3>";
}else{
    $archivo = fopen($_FILES['archivo']['tmp_name'], "r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);
}
?>
<form action="ejercicio1.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>

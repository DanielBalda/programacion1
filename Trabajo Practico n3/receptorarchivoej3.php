<?php
function mostrar(){
    $archivo = fopen('importados/'.$_FILES['archivo']['name'], "r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);
}
echo "<h1>Ejercicio 3</h1>";
if (empty($_FILES['archivo']['name'])) {
    echo "<h3>(!) No ingreso ningun archivo</h3>";
}else {
    if (file_exists('importados')) {
        echo "<h3>Archivo copiado al directorio: importados</h3>";
            copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
        echo "<h3>Contenido del Archivo:</h3><br>";
        mostrar();
    } else {
        mkdir('importados');
        echo "<h3>Archivo copiado al directorio: importados</h3>";
            copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
        echo "<h3>Contenido del Archivo:</h3><br>";
        mostrar();
    }
}
?>
<form action="ejercicio3.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>

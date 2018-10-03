<?php
echo "<h1>Ejercicio 3</h1>";
if (empty($_FILES['archivo']['name'])) {
    echo "<h3>(!) No ingreso ningun archivo</h3>";
}else {
    if (file_exists('importados')) {
        echo "<h3>Archivo copiado al directorio: importados</h3>";
        copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
    } else {
        mkdir('importados');
        echo "<h3>Archivo copiado al directorio: importados</h3>";
        copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
    }
}
?>
<form action="ejercicio3.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>

<?php
if (empty($_FILES['archivo']['name'])) {
    echo "<h3>(!) No ingreso ningun archivo</h3>";
}else {
    echo '<table border="1">';
    $archivo = fopen($_FILES['archivo']['tmp_name'], "r");
    $num_filas = 0;
    while (!feof($archivo) && $num_filas < 100) {
        $num_filas += 1;
        $data = fgets($archivo);
        echo "<tr><td>" . str_replace(';', '</td><td>', $data) . '</td></tr>';
    }
    echo '</table>';
    fclose($archivo);
}
?>
<form action="ejercicio2.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>

<?php
echo "<table>";
echo "<tr>";
foreach ($_POST as $value){
    echo "<td>" . $value . "</td>";
}
echo "</tr>";
echo "</table>";
$media=0;
foreach ($_POST as $value){
    $media+=(int)$value;
}
echo "<br>Valor maximo: " . max($_POST);
echo "<br>Valor minimo: " . min($_POST);
echo "<br>La media es: " . $media/count($_POST);
?>
<form action="ej7.html" method="get">
    <input type="submit" name="volver" value="Volver">
</form>

<style type="text/css">
    tr, td {
        border: 2px solid black;
        text-align: center;
        font-size: 25px;
    }
</style>
<?php
echo "<table>";
$num=0;
for ($n = 1; $n <= $_GET['texto1']; $n++){
    echo "<tr>";
    for ($m = 1; $m <= $_GET['texto2']; $m++){
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}
echo "</table>";
?>

<form action="ej6.html">
    <input type="submit" name="volver" value="Volver">
</form>

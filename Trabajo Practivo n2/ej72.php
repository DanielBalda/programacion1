<style type="text/css">
    tr, td {
        border: 2px solid black;
        text-align: center;
        font-size: 25px;
    }
</style>
<?php
echo "<table>";
$cantidad =  count($_POST);
$res=ceil($cantidad/2);
for($a = 0; $a < $res; $a++) {
    echo "<tr>";
    for($b = 0; $b < $res; $b++) {
        $posicion = $b + $res*$a;
        if(isset($_POST['texto'.$posicion])){
            echo "<td>" . $_POST['texto'.$posicion] . "</td>";
        }
    }
    echo "</tr>";
}
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
    <input type="submit" value="Volver">
</form>
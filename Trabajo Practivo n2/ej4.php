<?php

if (isset($_GET['nombre'])){
    foreach ($_GET as $key => $value){
        echo $key . ": " . $value . "<br>";
    }
}else
    echo "No se enviaron datos";

?>

<form action="ej4.html">
    <input type="submit" name="volver" value="Volver">
</form>

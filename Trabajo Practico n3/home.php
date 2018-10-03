<?php
session_start();
echo "<h1> Bienvenido ".$_SESSION['nombre']."</h1>";
?>
<form action="ejercicio6.html" method="get">
    <input type="submit" value="Volver">
</form>

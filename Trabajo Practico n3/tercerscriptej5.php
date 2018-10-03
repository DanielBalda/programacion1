<?php
session_start();
$_SESSION['extra1']=$_POST['texto7'];
$_SESSION['extra2']=$_POST['texto8'];
$_SESSION['extra3']=$_POST['texto9'];

echo "<h1>Ejercicio 5 (Tercer Script)</h1>";
echo "<h3>Datos Almacenados:</h3>";
echo $_SESSION['nombre']."<br>";
echo $_SESSION['apellido']."<br>";
echo $_SESSION['edad']."<br>";
echo $_SESSION['dni']."<br>";
echo $_SESSION['provincia']."<br>";
echo $_SESSION['pais']."<br>";
echo $_SESSION['extra1']."<br>";
echo $_SESSION['extra2']."<br>";
echo $_SESSION['extra3']."<br>";
?>
<a href="cuartoscriptej5.php">Cuarto Script</a><br><br>
<form action="ejercicio5.html" method="get">
    <input type="submit" value="Volver">
</form>

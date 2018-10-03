<?php
session_start();
$_SESSION['dni']=$_POST['texto4'];
$_SESSION['provincia']=$_POST['texto5'];
$_SESSION['pais']=$_POST['texto6'];

echo "<h1>Ejercicio 5 (Segundo Script)</h1>
    <form action='tercerscriptej5.php' method='post' enctype='multipart/form-data'>
        <label>Datos:</label><br><br>
        <input type='text' name='texto7'><br><br>
        <input type='text' name='texto8'><br><br>
        <input type='text' name='texto9''><br><br>
        <input type='submit' value='Enviar'>
    </form>";
?>
<form action="ejercicio5.html" method="get">
    <input type="submit" value="Volver">
</form>

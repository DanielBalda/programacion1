<?php
session_start();
$_SESSION['nombre']=$_POST['texto1'];
$_SESSION['apellido']=$_POST['texto2'];
$_SESSION['edad']=$_POST['texto3'];

echo "<h1>Ejercicio 5 (Primer Script)</h1>
    <form action='segundoscriptej5.php' method='post' enctype='multipart/form-data'>
        <label>Datos:</label><br><br>
        <input type='text' name='texto4'><br><br>
        <input type='text' name='texto5'><br><br>
        <input type='text' name='texto6''><br><br>
        <input type='submit' value='Enviar'>
    </form>";
?>
<form action="ejercicio5.html" method="get">
    <input type="submit" value="Volver">
</form>

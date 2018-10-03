<?php
session_start();
if ($_POST['user']=='Daniel' && $_POST['pass']=='1234'){
    $_SESSION['nombre']=$_POST['user'];
    header('location: home.php');
}else{
    echo "<h2>Usuario y/o Contrasena no validos</h2>";
    echo "<form action='ejercicio7.html' method='get'>
            <input type='submit' value='Volver''>
          </form>";
}
?>
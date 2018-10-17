<?php
if (!empty($_GET['logout'])){
    session_start();
    session_destroy();
    header('location: ejercicio8.html');
}else{
    if ($_POST['user']=='Daniel' && $_POST['pass']=='1234'){
        session_start();
        $_SESSION['nombre']=$_POST['user'];
        $_SESSION['validado']=1;
        header('location: home.php');
    }else{
        echo "<h2>Usuario y/o Contrasena no validos</h2>
          <form action='ejercicio8.html' method='get'>
            <input type='submit' value='Volver''>
          </form>";
    }
}
?>
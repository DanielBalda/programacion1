<?php
function archivo(){
    $log = date('Y/m/d') . ";" . date('H:i:s') . ";" . basename($_SERVER['PHP_SELF']);
    $archivo = fopen('Datos\registro.log','w');
    fwrite($archivo,$log.PHP_EOL);
    fclose($archivo);
}
if (!empty($_GET['logout'])){
    session_start();
    session_destroy();
    header('location: ejercicio9.html');
}else{
    if ($_POST['user']=='Daniel' && $_POST['pass']=='1234'){
        if (file_exists('Datos')) {
            archivo();
        } else {
            mkdir('Datos');
            archivo();
        }
        session_start();
        $_SESSION['nombre']=$_POST['user'];
        $_SESSION['validado']=1;
        header('location: home.php');
    }else{
        echo "<h2>Usuario y/o Contrasena no validos</h2>
          <form action='ejercicio9.html' method='get'>
            <input type='submit' value='Volver''>
          </form>";
    }
}
?>
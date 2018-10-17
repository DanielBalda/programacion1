<?php
function archivo(){
    $log = date('Y/m/d') . ";" . date('H:i:s') . ";" . basename($_SERVER['PHP_SELF']);
    $archivo = fopen('Datos\registro.log','a');
    fwrite($archivo,$log.PHP_EOL);
    fclose($archivo);
}
session_start();
if ($_SESSION['validado'] == 1){
    if (file_exists('Datos')) {
        archivo();
    } else {
        mkdir('Datos');
        archivo();
    }
    echo "<h1> Bienvenido ".$_SESSION['nombre']."</h1>";
    echo "<a href=\"home.php\"><h3>Home</h3></a>
          <a href=\"pagina1.php\"><h3>Pagina 1</h3></a>
          <a href=\"pagina2.php\"><h3>Pagina 2</h3></a>
          <form action='login.php' method='get'>
              <input type='submit' value='Salir' name='logout'>
          </form>";
}else{
    header('location: ejercicio9.html');
}
?>

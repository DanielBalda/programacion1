<?php
session_start();
if ($_SESSION['validado'] == 1){
    echo "<h1> Bienvenido " . $_SESSION['nombre'] . "</h1>";
    echo "<a href='pagina1.php'><h3>Pagina 1</h3></a>
          <a href='pagina2.php'><h3>Pagina 2</h3></a>
          <a href='pagina3.php'><h3>Pagina 3</h3></a>
          <form action='login.php' method='get'>
              <input type='submit' value='Salir' name='logout'>
          </form>";
}else{
    header('location: ejercicio8.html');
}
?>
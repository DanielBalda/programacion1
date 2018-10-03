<?php
session_start();
echo "<h1> Bienvenido ".$_SESSION['nombre']."</h1>";
?>
<a href="home.php"><h3>Home</h3></a>
<a href="pagina1.php"><h3>Pagina 1</h3></a>
<a href="pagina2.php"><h3>Pagina 2</h3></a>

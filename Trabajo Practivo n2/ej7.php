<?php
echo "<form action='ej72.php' method='post'>";
for ($a = 1; $a <= $_POST['text1']; $a++){
    echo "<input type='number' name='texto$a'><br>";
}
echo "<input type='submit' value='Enviar'><input type='reset' name='borrar' value='Borrar'></form>";
echo "<form action='ej7.html' method='get'><input type='submit' name='volver' value='Volver'></form>";
?>
<?php
echo "Textbox 1: $_GET[texto1]<br>Textbox 2: $_GET[texto2]<br>";

echo "Hidden: $_GET[oculto]<br>";

echo "Password: $_GET[clave]<br>";

echo "Checkbox 1: ";
if (empty($_GET['check1'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Checkbox 2: ";
if (empty($_GET['check2'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Checkbox 3: ";
if (empty($_GET['check3'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Radio Grupo 1: ";
if (empty($_GET['radio1'])) {
    echo "No selecciono ningun elemento<br>";
}else{
    echo $_GET['radio1']."<br>";
}

echo "Radio Grupo 2: ";
if (empty($_GET['radio2'])) {
    echo "No selecciono ningun elemento<br>";
}else{
    echo $_GET['radio2']."<br>";
}

echo "Lista Desplegable: $_GET[lista]<br>";

?>

<form action="ej3.html">
    <input type="submit" name="volver" value="Volver">
</form>

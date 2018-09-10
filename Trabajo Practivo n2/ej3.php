<?php
echo "Textbox 1: $_GET[texto1]<br>Textbox 2: $_GET[texto2]<br>";

echo "Hidden: $_GET[oculto]<br>";

echo "Password: $_GET[clave]<br>";

echo "Checkbox 1: ";
if (!isset($_GET['check1'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Checkbox 2: ";
if (!isset($_GET['check2'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Checkbox 3: ";
if (!isset($_GET['check3'])){
    echo "No seleccionado<br>";
}else{
    echo "seleccionado<br>";
}

echo "Radio Grupo 1: ";
if (isset($_GET['grupo1'])) {
    switch ($_GET['grupo1']) {
        case '1':
            echo "Primer elemento seleccionado<br>";
            break;
        case '2':
            echo "Segundo elemento seleccionado<br>";
            break;
        case '3':
            echo "Tercer elemento seleccionado<br>";
            break;
    }
}else{
    echo "No selecciono ningun elemento<br>";
}

echo "Radio Grupo 2: ";
if (isset($_GET['grupo2'])) {
    switch ($_GET['grupo2']) {
        case '1':
            echo "Primer elemento seleccionado<br>";
            break;
        case '2':
            echo "Segundo elemento seleccionado<br>";
            break;
        case '3':
            echo "Tercer elemento seleccionado<br>";
            break;
    }
}else{
    echo "No selecciono ningun elemento<br>";
}

echo "Lista Desplegable: $_GET[lista]<br>";

?>

<form action="ej3.html">
    <input type="submit" name="volver" value="Volver">
</form>

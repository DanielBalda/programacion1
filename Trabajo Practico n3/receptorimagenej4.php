<?php
function copiar(){
    //Copia Imagenes
        copy($_FILES['archivo']['tmp_name'], 'importados/'.$_FILES['archivo']['name']);
        echo "<h3>Galeria:</h3><br>";
    //Muestra Imagenes
        $arreglo = scandir('importados');
        unset($arreglo[0],$arreglo[1]);
        foreach ($arreglo as $value){
            echo "<h4>".$value."</h4><br><img src='importados/".$value."' width='120px' height='120px'><br>";
        }
}
echo "<h1>Ejercicio 4</h1>";
if (empty($_FILES['archivo']['name'] && $_FILES['archivo']['type']=="image/jpeg" || $_FILES['archivo']['type']=="image/png" )) {
    echo "<h3>(!) No ingreso ninguna imagen o el formate es incorrecto (JPG o PNG)</h3>";
}else {
    if (file_exists('importados')) {
        copiar();
    } else {
        mkdir('importados');
        copiar();
    }
}
?>
<form action="ejercicio4.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
